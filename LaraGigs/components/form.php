<?php include('./components/header.php'); ?>

<form action="index.php?action=" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
               <label for="first-name" class="col-form-label">
              First Name:
            </label>
            <input type="text" class="form-control" id="first-name" name="firstname">
            </div>
           
            <div class="mb-3">
               <label for="last-name" class="col-form-label">
              Last Name:
            </label>
            <input type="text" class="form-control" id="last-name" name="lastname">
            </div>
           
            <div class="mb-3">
               <label for="last-name" class="col-form-label">
              Profile Picture:
            </label>
            <input type="file" class="form-control" id="profile" name="profile" required>
            </div>
           
            <div class="mb-3">
                <label for="email" class="col-form-label">
              Email:
            </label>
            <input type="text" class="form-control" id="email" name="email">
            </div>
          
            <div class="mb-3">
                <label for="companyname" class="col-form-label">
              Company Name:
            </label>
            <input type="text" class="form-control" id="company-name" name="companyname">
            </div>

            
        <div class="modal-footer d-flex justify-content-center">
          <input type="hidden" name="action" value="create">
          <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="submit">Submit</button>
        </div>
          </form>
        </div>
  