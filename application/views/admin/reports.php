<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form action="" method="get">
                            <div class="input-group">
                                <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                              </span>
                                </div>
                                <input type="text" name="date_rng" class="form-control float-right" id="reservation" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary input-group-btn">
                                        Result
                                    </button>
                                </div>
                            </div>
                            <?php //echo validation_errors(); ?>
                        </form>

                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Site</th>
                        <th>Count</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($table as $key => $row){
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['cont'] ?></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- /.card -->