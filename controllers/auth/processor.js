function ajaxSubmitForm(formId, url, redirectUrl = null) {
  $(formId).on("submit", function (e) {
    e.preventDefault();

    var formData = $(this).serialize();
    var button = $(this).find("button");

    button.prop("disabled", true);

    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          if (response.messages && Array.isArray(response.messages)) {
            response.messages.forEach(function (message) {
              iziToast.success({
                title: "Success",
                message: message || "Form submitted successfully!",
                position: "topRight",
                timeout: 5000,
                progressBar: true,
                close: true,
                icon: "fas fa-check-circle",
                transitionIn: "fadeInDown",
                transitionOut: "fadeOutUp",
              });
            });
            if (redirectUrl) {
              setTimeout(() => {
                window.location.href = redirectUrl;
              }, 500); // Adjust the delay as needed
            }
          }
        } else {
          if (response.messages && Array.isArray(response.messages)) {
            response.messages.forEach(function (message) {
              showErrorToast(message);
            });
          } else {
            showErrorToast("An unexpected error occurred.");
          }
        }
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error("AJAX Error: " + textStatus + " - " + errorThrown);
        showErrorToast("Failed to submit the form. Please try again later.");
      },
      complete: function () {
        button.prop("disabled", false);
      },
    });
  });
}

// Function to show an error toast using iziToast
function showErrorToast(message) {
  iziToast.error({
    title: "Error",
    message: message,
    position: "topRight",
    timeout: 5000,
    progressBar: true,
    close: true,
    icon: "fas fa-exclamation-triangle",
    transitionIn: "fadeInDown",
    transitionOut: "fadeOutUp",
    backgroundColor: "#b71c1c",
  });
}

$(document).ready(function () {
  ajaxSubmitForm("#signUpForm", "controllers/auth/form_processor.php", "home");
  ajaxSubmitForm("#signInForm", "controllers/auth/form_processor.php", "home");
});
