<div class="page-content">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">TERMES DE REFERENCES</h4>
                <div class="page-title-right">
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create New Task</h4>
                    <form class="outer-repeater" method="post">
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Task
                                        Name</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="taskname" type="text" class="form-control"
                                            placeholder="Enter Task Name...">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Task Description</label>
                                    <div class="col-lg-10">
                                        <textarea id="taskdesc-editor" name="area"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Task Date</label>
                                    <div class="col-lg-10">
                                        <div class="input-daterange input-group" data-provide="datepicker">
                                            <input type="text" class="form-control" placeholder="Start Date"
                                                name="start" />
                                            <input type="text" class="form-control" placeholder="End Date" name="end" />
                                        </div>
                                    </div>
                                </div>

                                <div class="inner-repeater mb-4">
                                    <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                        <label class="col-form-label col-lg-2">Add Team Member</label>
                                        <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                                            <div class="mb-3 row align-items-center">
                                                <div class="col-md-6">
                                                    <select class="form-select" name="sexe" aria-label="Default select example" wire:model='sexe'>
                                                        <option value="Homme" selected>Homme</option>
                                                        <option value="Femme">Femme</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mt-4 mt-md-0">
                                                        <input class="form-control" type="file">
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mt-2 mt-md-0 d-grid">
                                                        <input data-repeater-delete type="button"
                                                            class="btn btn-primary inner" value="Delete" />
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-lg-10">
                                            <input data-repeater-create type="button" class="btn btn-success inner"
                                                value="Add Number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Budget</label>
                                    <div class="col-lg-10">
                                        <input id="taskbudget" name="taskbudget" type="text"
                                            placeholder="Enter Task Budget..." class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Task</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- end page title -->
    <div class="row">

    </div>
    <!-- end row -->
</div>
