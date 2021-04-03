
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Crud Php</title>
</head>
<body>
    <?php require_once('../connection/connections.php');?>
    <div class="alert alert-warning text-center alert-message ">Please complete the form. Thank you</div>
    <div class="alert alert-success text-center alert-submit ">Submitted</div>
    <div class="alert alert-danger text-center alert-delete">Deleted</div>
    <div class="alert alert-warning text-center alert-update">Updated</div>
    <div class="container">
    <main class="container justify-content-center  main">
    <div>
    <table class="table table-striped table-hover border">
    <thead class="bg-dark text-light " >
    <tr>
    <th class="col">Fullname</th>
    <th class="col ">Address</th>
    <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php while($row = $findData->fetch_assoc()):?>
    <tr>
        <td><?php echo $row['fullname'];?></td>
        <td><?php echo $row['address'];?></td>
        <td class="text-center">
       
  
        <form action="" method="POST">
        <button type="submit" name="edit" class="btn btn-sm btn-primary">Edit</button>
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id-edit" class="btn btn-sm btn-danger ">
        <button type="submit" name="delete" class="btn btn-sm btn-danger ">Delete</button>
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id-delete" class="btn btn-sm btn-danger ">
        </form>
      
        </td>
    </tr>
    <?php endwhile; ?>
    </tbody>
    </table>
    </div>


<div class="p-5 bg-table">
    <form action="index.php" method='POST'>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form-group">
    <label>Fullname</label>
    <input  type="text" name="name" placeholder="Fullname" class="form-control fullname" value="<?php echo $name;?>" >
    </div>
    <br>
    <div class="form-group">
    <label>Address</label>
    <input  type="text" name="address" placeholder="Address" class="form-control address" value="<?php echo $address;  ?>">
    </div>
    <br>
    <div class="form-group">
        <?php if($update == true): ?>
    <button type="submit" name="btn-update" class="form-control btn btn-md btn-info update-btn">Update</button>
    <?php else: ?>
    <button type="submit" name="btn-submit" class="form-control btn btn-md btn-dark submit">Submit</button>
    <?php endif; ?>
    </div>
    </form>
</div>
        
    </main>
    <script src="script.js"></script>
</body>
</html>


