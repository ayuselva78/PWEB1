$(document).ready(function () {
    // Fade-in effect for gallery images
    $(".gallery img").each(function (index) {
      $(this).delay(index * 200).queue(function (next) {
        $(this).addClass("fade-in");
        next();
      });
    });
  
    // Open modal on image click
    $(".gallery img").click(function () {
      const imgSrc = $(this).attr("src");
      const imgCaption = $(this).siblings(".gallery-caption").text(); // Get caption text
      $("#modalImage").attr("src", imgSrc);
      $("#modalCaption").text(imgCaption); // Set modal caption
      $("#myModal").fadeIn();
    });
  
    // Close modal on clicking "close" button
    $(".close").click(function () {
      $("#myModal").fadeOut();
    });
  
    // Close modal on clicking outside the modal-content
    $("#myModal").click(function (event) {
      if (!$(event.target).closest(".modal-content").length) {
        $("#myModal").fadeOut();
      }
    });
  });
  