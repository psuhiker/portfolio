(function(){
 
    var tour = new Tour({
        storage : false
    });
 
    tour.addSteps([
      {
        element: ".tour-step.tour-step-one",
        placement: "right",
        title: "Product Documents",
        content: "Click on a document link to view the SDS or Label"
      },
      {
        element: ".tour-step.tour-step-two",
        placement: "right",
        title: "Favorite Added!",
        content: "Now this document has been added to your favorites list",
        path: "favorites-list.html"
      },
 
    ]);
 
    // Initialize the tour
    tour.init();
 
    // Start the tour
    tour.start();
 
}());