<div class="content-page">
<!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Ebook</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                        <li class="breadcrumb-item active">Add Product</li>

                    </ol>
                </div>
                <h4 class="page-title">Add Product</h4>
            </div>
        </div>
    </div>     
<!-- end page title --> 

    <form style="margin: 0 auto; width:500px; font-size: 14px " enctype="multipart/form-data" action="pages/product/addHandle.php" method="POST">
    
        <fieldset>
            <legend>Product info</legend>
            Product Name
            <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtProduct_Name"  />
           
        </fieldset>

        <fieldset>
            Category Id
            <!-- <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtCat_Id"  /> -->
            <br>
            <?php
                $sql = "SELECT DISTINCT Category_Id FROM category";

                $query = DataProvider::ExecuteQuery($sql);
            ?>
            <select style="margin-bottom: 7px; width: 300px; height: 36px;  border-radius: 4px; background: #58616e; color: white"  name="txtCat_Id"   >
                <?php
                while($row = mysqli_fetch_array($query))
                {
                    echo "<option value=".$row["Category_Id"].">".$row["Category_Id"]."</option>";
                }
                ?>
            </select>
        </fieldset>

        <fieldset>
            SKU
            <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtSKU"  />
        </fieldset>

        <fieldset>
            Publishing Company Id
            <!-- <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtPublishingCo_Id"  /> -->
            <br>
            <?php
                $sql = "SELECT Publishing_Company_Name, Publishing_Company_Id FROM publishing_company";

                $query = DataProvider::ExecuteQuery($sql);
            ?>
            <select style="margin-bottom: 7px; width: 300px; height: 36px;  border-radius: 4px; background: #58616e; color: white"  name="txtPublishingCo_Id"   >
                <?php
                while($row = mysqli_fetch_array($query))
                {
                    echo "<option value=".$row["Publishing_Company_Id"].">".$row["Publishing_Company_Name"]."</option>";
                }
                ?>
            </select>
        </fieldset>

        <fieldset>
            Author
            <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtAuthor" />
        </fieldset>
        <fieldset>
            Price
            <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtPrice"  />
        </fieldset>

        <fieldset>
            Quantity
            <input style="margin-bottom:7px;" class="form-control" type="text" required="" name="txtQuantity"  />
        </fieldset>

        <fieldset>
            Date Created
            <input style="margin-bottom:7px;" class="form-control" type="date" required="" name="txtDate"  />
        </fieldset>

        <fieldset>
            Description
            <textarea style="border-radius: .2rem; margin-bottom:7px; width: 500px; height: 300px; background: #434b56; color: #f7f7f7" required="" name="txtDecription"></textarea>
        </fieldset>

        <fieldset>
            Avatar
            </br>
            <input type="file" name="myfile" />
        </fieldset>

        <fieldset style="padding-top: 20px; text-align: center">
            <input class="btn btn-danger" style="margin-right:10px; width: 70px"  type="submit" value="Add" />
            <input class="btn btn-danger" style="width: 70px" type="button" value="Cancel" onClick="location = 'index.php?act=4';" />
        </fieldset>

    </form>

</div>