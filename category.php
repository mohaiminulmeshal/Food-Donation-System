<?php require './components/header.php'; ?>

<section id="filter">


    <div class="fil-border container-fluid">
    <h2 class="filter-txt section-heading">Select type of food you want to donate!</h2>


    <div class="row ">

              <div class="filter-table col-lg-6">
                <div class="filter-cell">
                <div class="select">
                <select>
                <option value="" disabled selected>--------</option>
                <option value="1">Bread & Grains</option>
                <option value="2">Vegetables</option>
                <option value="3">Fruits</option>
                <option value="3">Dairy</option>
                </select>
                </div>
              </div>
              </div>
            </div>
   </div>

  <div class="fil-border container-fluid">
    <h2 class="filter-txt section-heading">Type food amount(Kg/L)!</h2>
  <input type ="text" style="font-size: 100%" name="value"/>
  <input type="submit" class="btn btn-primary" value="Submit"/>
</form>
</div>

<div class="fil-border container-fluid">
    <h2 class="filter-txt section-heading">Select NGO to donate</h2>


    <div class="row ">

              <div class="filter-table col-lg-6">
                <div class="filter-cell">
                <div class="select">
                <select>
                <option value="" disabled selected>--------</option>
                <option value="1">Column</option>
                <option value="2">Master</option>
                <option value="3">Spaces</option>
                <option value="3">ETC</option>
                </select>
                </div>
              </div>
              </div>
            </div>
   </div>

<div class="fil-border container-fluid">
    <h2 class="filter-txt section-heading">Select Delivery Procedure</h2>


    <div class="row ">

              <div class="filter-table col-lg-6">
                <div class="filter-cell">
                <div class="select">
                <select>
                <option value="" disabled selected>--------</option>
                <option value="1">Self</option>
                <option value="2">Volunteer</option>
                </select>
                </div>
              </div>
              </div>
            </div>
   </div>

  </section>

<?php require './components/footer.php'; ?>