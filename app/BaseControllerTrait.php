<?php

/**
 * Base Controller Trait
 *
 * Required properties:
 *
 * @property string $model - The model class name
 * @property string $viewPath - Base path for views
 * @property string $routeName - Route name prefix
 * @property array $validationRules - Validation rules
 * @property string $successMessage - Success message
 */

namespace App;

trait BaseControllerTrait
{
    public function index()
    {
        $model = $this->model::paginate(10);

        return view($this->viewPath.'.index', compact('model'));
    }

    public function create()
    {
        return view($this->viewPath.'.create');
    }

    public function store()
    {
        $validatedData = request()->validate($this->validationRules);

        $this->model::create($validatedData);

        return redirect()->route($this->routeName.'.index')->with('success', $this->successMessage);
    }

    public function show($id)
    {
        $model = $this->model::findOrFail($id);

        return view($this->viewPath.'.show', compact('model'));
    }

    public function edit($id)
    {
        $model = $this->model::findOrFail($id);

        return view($this->viewPath.'.edit', compact('model'));
    }

    public function update($id)
    {
        $model = $this->model::findOrFail($id);

        $validatedData = request()->validate($this->validationRules);

        $model->update($validatedData);

        return redirect()->route($this->routeName.'.index')->with('success', $this->successMessage);
    }

    public function destroy($id)
    {
        $model = $this->model::findOrFail($id);
        $model->delete();

        return redirect()->route($this->routeName.'.index')->with('success', 'Deleted successfully.');
    }
}
