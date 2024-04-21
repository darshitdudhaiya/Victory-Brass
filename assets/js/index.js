// Handle main page form submission

let url;
let redirectUrl;

document.getElementById("main-page-form")
  ? document
      .getElementById("main-page-form")
      .addEventListener("submit", function (event) {
        event.preventDefault();
        url = "/victory/assets/ajax/contact.php";
        redirectUrl = "index.php";

        insert_contact("main-page-form", url, redirectUrl);
      })
  : null;

// Handle modal form submission
document
  .getElementById("modal-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    if (window.location == "http://localhost/victory/#") {
      url = "/victory/assets/ajax/contact.php";
      redirectUrl = "";
    } else {
      url = "/victory/assets/ajax/contact.php";
      redirectUrl = "../index.php";
    }
    insert_contact("modal-form", url, redirectUrl);
  });

function insert_contact(formId, url, redirectUrl) {
  // $('#btn-submit').attr('disabled', '');

  // $('#btn-submit-text').hide();
  // $('#btn-submit-text-saved').hide();
  // $('#btn-submit-spinner').show();

  var form = document.getElementById(formId);
  let formData = new FormData();
  // formData.append('class-id', $('#service').val());
  formData.append("name", form.querySelector(".contact-name").value);
  formData.append("email", form.querySelector(".contact-email").value);
  formData.append("message", form.querySelector(".contact-message").value);
  formData.append("mobile", form.querySelector(".contact-mobile").value);

  // let files = $('#images')[0].files;
  // for (let i = 0; i < files.length; i++) {
  //     formData.append('images[]', files[i]);
  // }
  $.ajax({
    method: "POST",
    url: url ? url : null,
    contentType: false,
    processData: false,
    data: formData,
    success: (response) => {
      if (response.status) {
        console.log(response);
        // $('#btn-submit-text').hide();
        // $('#btn-submit-text-saved').show();
        // $('#btn-submit-spinner').hide();

        setTimeout(() => (window.location.href = redirectUrl), 1000);
      }
    },
  });

  return false;
}
