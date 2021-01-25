<?php 
    include("includes/header.php");
    include("includes/functions.php");

    //declare variable so that it doesn't give the undefined variable error. Even if the variable is inside the function, it was never declared so that's why it gives the error.
    $formData = "";
    #check to see if the button has been clicked
    if(isset($_POST["submit"])) {
        //call function
        validateFormData($formData);
    }
  
?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 px-0">
          <img src="img/uf_1.jpg" class="img-fluid" alt="Responsive image" id="mainImage">
        </div><!--col-->
      </div><!--row-->
    </div><!--container-->

  <section id="ourStory">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
              <img src="img/uf_5.png" class="img-fluid mx-4" alt="stray dog lying down">
          </div>
          <div class="col-md-5 mx-auto">
                <h1>Our Story</h1>
                <p>Eget mi proin sed libero enim. Sit amet volutpat consequat mauris nunc congue nisi. Mattis ullamcorper velit sed ullamcorper. Tempor nec feugiat nisl pretium fusce id velit ut. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Diam donec adipiscing tristique risus nec. Gravida in fermentum et sollicitudin. Laoreet suspendisse interdum consectetur libero. Pellentesque massa placerat duis ultricies.<br><br>
                Bibendum neque egestas congue quisque egestas. Enim blandit volutpat maecenas volutpat. Urna porttitor rhoncus dolor purus. Ac turpis egestas sed tempus urna. Pellentesque id nibh tortor id aliquet lectus proin. Sit amet massa vitae tortor condimentum lacinia quis. Adipiscing elit ut aliquam purus sit amet luctus. Pellentesque dignissim enim sit amet venenatis urna cursus eget. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Ultrices neque ornare aenean euismod elementum nisi quis eleifend. Quis lectus nulla at volutpat diam ut venenatis. Sed risus ultricies tristique nulla aliquet.<br><br>
                Tempor nec feugiat nisl pretium fusce id velit ut. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Diam donec adipiscing tristique risus nec. Gravida in fermentum et sollicitudin. Laoreet suspendisse interdum consectetur libero. 
               </p>
            </div>
        </div><!--column-->
      </div><!--row-->
    </div><!--container-->
  </section>

     <section id="gallery">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 text-center">
            <img src="img/uf_6.jpg" class="img-fluid" alt="two cats looking at each other">
          </div><!--column-->
          <div class="col-md-8">
          <div class="row mb-4">
          <div class="col-md-6 text-center">
            <img src="img/uf_7.jpg" class="img-fluid" alt="two dogs next to each other">
          </div><!--column-->
          <div class="col-md-6 text-center">
            <img src="img/uf_8.jpg" class="img-fluid" alt="a cat looking at the camera">
          </div><!--column-->
        </div><!--row-->
            <div class="row">
             <div class="col-md-12" id="catImage">
            <img src="img/uf_9.jpg" class="img-fluid" alt="a cat looking at the camera">
            </div><!--column-->
          </div><!--row 2-->
          </div><!--col-md-8-->
        </div><!--row-->
      </div><!--container-->
     </section><!--gallery-->

     <section id="blog">
       <div class="container-fluid">
         <div class="row">
           <div class="col">
             <h1 class="text-center">Blog</h1>
           </div><!--col-->
         </div><!--row-->
         <div class="row">
            <div class="col-md-4 text-center">
              <figure class="figure" id="figure1">
                <img src="img/uf_2.jpg" class="figure-img img-fluid" alt="stray dog looking back at the camera">
                <figcaption class="figure-caption text-center" id="figCaption">Aliquet enim tortor at auctor. Pretium nibh ipsum consequat nisl vel pretium lectus. </figcaption>
              </figure>
            </div><!--col-md-4-->
            <div class="col-md-4 text-center">
              <figure class="figure" id="figure2">
                <img src="img/uf_3.jpg" class="figure-img img-fluid" alt="stray cat">
                <figcaption class="figure-caption text-center" id="figCaption">Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus.</figcaption>
              </figure>
            </div><!--col-md-4-->
            <div class="col-md-4 text-center">
              <figure class="figure" id="figure3">
                <img src="img/uf_4.jpg" class="figure-img img-fluid" alt="sad stray dog">
                <figcaption class="figure-caption text-center" id="figCaption">Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque.</figcaption>
              </figure>
            </div><!--col-md-4-->
         </div><!--row-->
       </div><!--container-->
     </section>

     <section id="waysToHelp">
       <div class="container-fluid">
          <div class="row">
              <div class="col-md-6 mx-auto order-last">
                  <img src="img/uf_10.jpg" class="img-fluid">
              </div>
              <div class="col-md-5 mx-auto">
                  <h1 class="text-center">Ways To Help</h1>
                  <p>Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Lacinia quis vel eros donec ac. Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Faucibus turpis in eu mi bibendum. Massa ultricies mi quis hendrerit. Bibendum ut tristique et egestas quis. Nisi vitae suscipit tellus mauris a. Lobortis feugiat vivamus at augue eget. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Pellentesque elit ullamcorper dignissim cras. Pellentesque sit amet porttitor eget dolor morbi non arcu risus. Tellus id interdum velit laoreet id donec ultrices tincidunt. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce. Adipiscing diam donec adipiscing tristique risus. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Dictum sit amet justo donec enim diam. Porttitor lacus luctus accumsan tortor posuere ac ut consequat. Ultricies tristique nulla aliquet enim.<br><br>
                  Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Risus in hendrerit gravida rutrum quisque. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum. Ipsum consequat nisl vel pretium lectus quam id. Ut sem viverra aliquet eget sit amet. Sed euismod nisi porta lorem mollis aliquam ut porttitor leo. Semper quis lectus nulla at volutpat diam ut. Risus at ultrices mi tempus. Eu feugiat pretium nibh ipsum consequat nisl. Eu scelerisque felis imperdiet proin fermentum. Lorem sed risus ultricies tristique nulla aliquet enim tortor at. Sit amet mauris commodo quis imperdiet massa. Urna porttitor rhoncus dolor purus. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper velit.</p>
                </div>
              </div><!--column-->
          </div><!--row-->
          <div class="row">
              <div class="col-md-5 mx-auto" id="projectCol">
                  <h2 class="text-center">Project 1</h2>
                  <p>Tortor id aliquet lectus proin nibh nisl condimentum id. Laoreet id donec ultrices tincidunt arcu non sodales. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Turpis tincidunt id aliquet risus feugiat in ante metus. Vivamus arcu felis bibendum ut tristique. Semper quis lectus nulla at volutpat diam ut venenatis tellus. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Eu augue ut lectus arcu bibendum at. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.</p>
                  <ol>
                    <li>Ultrices gravida dictum fusce ut placerat orci. Leo vel fringilla est ullamcorper eget nulla. At quis risus sed vulputate odio ut enim blandit.</li>
                    <li>Ornare massa eget egestas purus viverra accumsan in nisl. Justo eget magna fermentum iaculis eu. Molestie a iaculis at erat pellentesque. Etiam erat velit scelerisque in dictum. </li>
                    <li>Quam vulputate dignissim suspendisse in est ante in. Sed nisi lacus sed viverra. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Convallis convallis tellus id interdum.</li>
                    <li>In iaculis nunc sed augue lacus. Eleifend mi in nulla posuere. Nisi est sit amet facilisis magna.</li>
                  </ol>
                  <div class="row">
                      <div class="col-md-6">
                          <img src="img/project_1.jpg" class="img-fluid">
                      </div><!--col-md-6-->
                      <div class="col-md-6">
                        <img src="img/project_2.jpg" class="img-fluid">
                    </div><!--col-md-6-->
                    <div class="col-md-6 mt-3">
                      <img src="img/project_3.jpg" class="img-fluid">
                  </div><!--col-md-6-->
                  <div class="col-md-6 mt-3">
                    <img src="img/project_4.jpg" class="img-fluid">
                </div><!--col-md-6-->
                  </div><!--row-->
              </div><!--col-md-6-->
              <div class="col-md-5 mx-auto" id="projectCol">
                <h2 class="text-center">Project 2</h2>
                <p>Tortor id aliquet lectus proin nibh nisl condimentum id. Laoreet id donec ultrices tincidunt arcu non sodales. Donec ac odio tempor orci dapibus ultrices in iaculis nunc. Turpis tincidunt id aliquet risus feugiat in ante metus. Vivamus arcu felis bibendum ut tristique. Semper quis lectus nulla at volutpat diam ut venenatis tellus. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Eu augue ut lectus arcu bibendum at. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper.</p>
                <ol>
                  <li>Ultrices gravida dictum fusce ut placerat orci. Leo vel fringilla est ullamcorper eget nulla. At quis risus sed vulputate odio ut enim blandit.</li>
                  <li>Ornare massa eget egestas purus viverra accumsan in nisl. Justo eget magna fermentum iaculis eu. Molestie a iaculis at erat pellentesque. Etiam erat velit scelerisque in dictum. </li>
                  <li>Quam vulputate dignissim suspendisse in est ante in. Sed nisi lacus sed viverra. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Convallis convallis tellus id interdum.</li>
                  <li>In iaculis nunc sed augue lacus. Eleifend mi in nulla posuere. Nisi est sit amet facilisis magna.</li>
                </ol>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/project_1.jpg" class="img-fluid">
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                      <img src="img/project_2.jpg" class="img-fluid">
                  </div><!--col-md-6-->
                  <div class="col-md-6 mt-3">
                    <img src="img/project_3.jpg" class="img-fluid">
                </div><!--col-md-6-->
                <div class="col-md-6 mt-3">
                  <img src="img/project_4.jpg" class="img-fluid">
              </div><!--col-md-6-->
                </div><!--row-->
            </div><!--col-md-6-->
          </div><!--row-->
       </div><!--container-->
     </section>

     <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">We Want to Hear from You!</h1>
                </div><!--col-->
              </div><!--row-->
              <div class="row">
                <div class="col-md-10 offset-md-1">
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                      <div class="row">
                        <div class="form-group col-md-4">
                            <?php if(isset($firstNameError)){echo $firstNameError;}?>
                            <label for="firstName" class="sr-only">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" name="firstName">
                        </div><!--col-md-4-->
                        <div class="form-group col-md-4">
                          <small class="text-danger"><?php if(isset($lastNameError)){echo $lastNameError;}?></small>
                          <label for="lastName" class="sr-only">Last Name</label>
                          <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="lastName">
                      </div><!--col-md-4-->
                      <div class="form-group col-md-4">
                        <small class="small-text"><?php if(isset($emailError)){echo $emailError;}?></small>
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div><!--col-md-4-->
                    <div class="form-group col">
                      <small class="text-danger"><?php if(isset($messageError)){echo $messageError;}?></small>
                      <label for="message" class="sr-only">Message</label>
                      <textarea id="message" class="form-control" rows="6" name="message">Message</textarea>
                    </div>
                    <div class="col-md-12 text-center">
                      <button class="text-center btn btn-dark btn-lg" type="submit" name="submit" value="Submit" id="submit" role="button">Submit</button>
                    </div>
                    <?php 
                        if(isset($_POST["submit"])) {
                          echo "<h6 class='text-success ml-3'>Your message has been sent. We will contact you shortly :)!</h6>";
                        }
                    ?>
                  </div><!--row-->
                </form>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->
     </section>

<?php
  include("includes/footer.php");
?>