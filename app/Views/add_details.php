<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To DO APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>


    <div class="container">
        <div class="card" style="border-radius: 3rem;">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <div class="card-body" style="border-radius: 2rem;">
                        <p class="text-end">__TODO LIST__</p>
                        <?php if (isset($todo) && is_array($todo)) : ?>
                            <?php foreach ($todo as $row) : ?>
                                <table class="table" style="background-color: #fc7498; border-radius: 2rem;">
                                    <tr>
                                        <td class="col-md-12 text-center" style="border-radius: 1rem;">
                                            <?= $row['title'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-12 mt-1 text-start">
                                            <?= $row['dates'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-12 mt-1 text-start">
                                            <?= isset($row['details']) ? $row['details'] : 'No details available'; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-12 mt-1 text-end" style="padding-right: 20px;">
                                            <a href="<?= base_url('editdetails/' . $row['id']) ?>" class="btn btn-light edit-btn">Edit</a>
                                            <a href="<?= base_url('removedetails/' . $row['id']) ?>" class="btn btn-primary edit-btn"><i class="bi bi-trash-fill"></i> Remove</a>
                                        </td>
                                    </tr>
                                </table>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>No TODO items available.</p>
                        <?php endif; ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                    if (session()->getFlashdata('status')) {
                        echo "<h4>" . session()->getFlashdata('status') . "</h4>";
                    }
                    ?>
                    <div class="card-body">
                        <form action="<?= base_url('edit/update/' . $tododata['id']) ?>" method="POST">
                            <div class="card" style="border-radius: 35px;">
                                <div class="form-group text-center" style="background-color: #fc7498; padding-right: 20px; padding-left: 20px; border-top-left-radius: 35px; border-top-right-radius: 35px;">
                                    <label for="exampleInputEmail1" style="padding-top: 10px; padding-bottom: 5px;">Title*</label>
                                    <input type="text" name="title" value="<?= $tododata['title'] ?>" class="form-control" id="title" aria-describedby="title">
                                </div>
                                <div class="form-group text-center" style="background-color: #fc7498; padding-right: 20px; padding-left: 20px;">
                                    <label for="details" style="padding-top: 10px; padding-bottom: 5px;">Details*</label>
                                    <textarea class="form-control" name="details" id="details" rows="10"><?= $tododata['details'] ?></textarea>
                                </div>
                                <div class="form-group text-center" style="background-color: #fc7498;  padding-right: 20px; padding-left: 20px;">
                                    <label for="exampleInputEmail1" style="padding-top: 10px; padding-bottom: 5px;">Date*</label>
                                    <input type="text" class="form-control" value="<?= $tododata['dates'] ?>" name="datedata" id="datedata" aria-describedby="datedata">
                                </div>
                                <div class="col-md-12 text-center" style="background-color: #fc7498; padding-top: 20px; padding-bottom: 20px; border-bottom-left-radius: 35px; border-bottom-right-radius: 35px;">
                                    <button type="submit" class="btn btn-light">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <script>
            $(document).ready(function() {
                $(".remove-btn").click(function() {
                    var itemId = $(this).data("id");

                    $.ajax({
                        type: "POST",
                        url: "your_controller_remove_url", // Replace with the actual URL of your controller method
                        data: {
                            id: itemId
                        },
                        success: function(response) {
                            console.log(response);

                            // Optional: Remove the item from the UI
                            $(this).closest(".card").remove();
                        },
                        error: function(error) {
                            console.error(error);
                        }
                    });
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>

</html>