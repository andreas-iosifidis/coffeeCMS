import "./bootstrap";

var imagePath = "/assets/images/products/";
var products = [
    "americano.jpg",
    "burger-1.jpg",
    "capuccino.jpg",
    "dessert-1.jpg",
    "dish-1.jpg",
    "drink-1.jpg",
    "espresso.jpg",
    "mocha.jpg",
];

var welcome_gallery_section_hooks = document
    .getElementById("gallery-welcome")
    .querySelectorAll("a");

function imageCarousel() {
    let index = 0;
    let i = 0;

    setInterval(function () {
        welcome_gallery_section_hooks[0].style.backgroundImage =
            "url('" + imagePath + products[index % products.length] + "')";
        welcome_gallery_section_hooks[0].style.borderRadius = "25px";
        welcome_gallery_section_hooks[0].style.border = "solid white 1px ";

        welcome_gallery_section_hooks[1].style.backgroundImage =
            "url('" +
            imagePath +
            products[(index + 1) % products.length] +
            "')";
        welcome_gallery_section_hooks[1].style.borderRadius = "25px";
        welcome_gallery_section_hooks[1].style.border = "solid white 1px ";

        welcome_gallery_section_hooks[2].style.backgroundImage =
            "url('" +
            imagePath +
            products[(index + 2) % products.length] +
            "')";
        welcome_gallery_section_hooks[2].style.borderRadius = "25px";
        welcome_gallery_section_hooks[2].style.border = "solid white 1px ";

        welcome_gallery_section_hooks[3].style.backgroundImage =
            "url('" +
            imagePath +
            products[(index + 3) % products.length] +
            "')";
        welcome_gallery_section_hooks[3].style.borderRadius = "25px";
        welcome_gallery_section_hooks[3].style.border = "solid white 1px ";
        index++;

        if (index > products.length) {
            index = 0;
        }
    }, 5000);
}
Window.onload = imageCarousel();

// $(document).ready(function () {
//     imageCarousel;
// });

/*
 <div class="book p-4">
        <h3>Book a Table</h3>
        <form action="#" class="appointment-form">
          <div class="d-md-flex">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group ml-md-4">
              <input type="text" class="form-control" placeholder="Last Name">
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <div class="input-wrap">
                <div class="icon"><span class="ion-md-calendar"></span></div>
                <input type="text" class="form-control appointment_date" placeholder="Date">
              </div>
            </div>
            <div class="form-group ml-md-4">
              <div class="input-wrap">
                <div class="icon"><span class="ion-ios-clock"></span></div>
                <input type="text" class="form-control appointment_time" placeholder="Time">
              </div>
            </div>
            <div class="form-group ml-md-4">
              <input type="text" class="form-control" placeholder="Phone">
            </div>
          </div>
          <div class="d-md-flex">
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group ml-md-4">
              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
            </div>
          </div>
        </form>
      </div>
      */
