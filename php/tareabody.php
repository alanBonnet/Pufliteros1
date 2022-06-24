<div class="container p-4">
    <div class="row mx-auto">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="../controllers/tareas/guardarTarea.php" method="POST">
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="title" 
                                id="" 
                                class="form-control" 
                                placeholder="Task title" 
                                autofocus>
                        
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" 
                            rows="2" class="form-control"
                            placeholder="Task description"></textarea>
                        </div>
                        <input type="submit" value="Save Task" class="btn btn-success btn-block" name="save_task">
                    </form>
                </div>
            </div>
            <div class="col-md-8"></div>

            <div class="col-md-4"></div>
            <div class="col-md-8"></div>
        </div>
    </div>
</div>