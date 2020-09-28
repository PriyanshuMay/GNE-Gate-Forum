<?php include("header.php");

if (!isset($_SESSION["loggedin"])) {
  header('location: login.php');
}
$ID = $_GET['id'];
if (!$ID) {
  echo "<script>
    document.location='index.php';
    </script>";
}
$find_product_data = "SELECT * FROM product WHERE id = '$product_id'";
$found_product_data = $connect->query($find_product_data);
$product_id_array = $found_product_data->fetch_assoc();
$product_section = $product_id_array['section'];
$product_brand = $product_id_array['brand'];
$product_category = $product_id_array['category'];
$product_description = $product_id_array['description'];
$product_title  = $product_id_array['name'];
$product_image = $product_id_array['file'];
$sql = "INSERT INTO search ( product_id, customer_id, section, brand, category, created) VALUES ('$product_id', '$customer_id', '$product_section', '$product_brand ','$product_category',NOW())";

mysqli_query($connect, $sql);
?>
<div class="container">
  <div class="col-lg-12 my-4">
    <?php
    $sql = "SELECT id,content,level,tym,branch,username,created FROM questions WHERE id = '$ID'";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
      while ($row = $result->fetch_assoc()) : ?>
      <div>
        <span><?php echo $row["content"]; ?></span><br>
        <p class="text-center"><span class="badge badge-light"> Asked by <?php echo $row["username"]; ?> on <?php echo $row["created"]; ?>
            </span></p>
            <p class="text-center"><span class="badge badge-light"> Tags</span>
             <span class="badge badge-info"><?php echo $row["branch"]; ?> </span>
            <span class="badge badge-warning"><?php echo $row["level"]; ?></span>
            <span class="badge badge-secondary"><?php echo $row["tym"]; ?></span>
          </p>
      </div>
    <?php
      endwhile;
    ?>
    <div class="col-lg-12 text-center">
      <form name="addform" action="postans.php" method="POST">
        <input type="hidden" name="qid" value="<?php echo $ID; ?>">
        <div class="justify-content-center">
        <textarea name="content" cols="100" rows="10" required>
    Make sure you answer is precise and to the point.
  </textarea>
        </div>

        <div class="container my-4">
          <div class="row">
            <div class="col-sm">
              <select name="level" class="custom-select">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
              </select>
            </div>
            <div class="col-sm">
              <select name="tym" class="custom-select">
                <option value="0-2 min">0-2 Min</option>
                <option value="2-5 Min">2-5 Min</option>
                <option value="5-10 Min">5-10 Min</option>
              </select>
            </div>
            <div class="col-sm">
              <button type="submit" name="submit" class="btn btn-success">Post Your Answer</button>
            </div>
          </div>
        </div>
    </div>

    <!-- <script src="essentials/ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace('content');
    </script> -->
    </form>
  </div>
</div>
</div>
</div>
</div>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
</body>
</html>