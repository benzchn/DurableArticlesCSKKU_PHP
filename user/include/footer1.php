
<script type="text/javascript">

$(document).ready(function() {
    $('#myTable').DataTable();
} );

// function test() {
//     var tabsNewAnim = $("#navbarSupportedContent");
//     var selectorNewAnim = $("#navbarSupportedContent").find("li").length;
//     var activeItemNewAnim = tabsNewAnim.find(".active");
    // var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
    // var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
    // var itemPosNewAnimTop = activeItemNewAnim.position();
    // var itemPosNewAnimLeft = activeItemNewAnim.position();
    // $(".hori-selector").css({
    //   top: itemPosNewAnimTop.top + "px",
    //   left: itemPosNewAnimLeft.left + "px",
    //   height: activeWidthNewAnimHeight + "px",
    //   width: activeWidthNewAnimWidth + "px"
    // });

//     $("#navbarSupportedContent").on("click", "li", function (e) {
//       $("#navbarSupportedContent ul li").removeClass("active");
//       $(this).addClass("active");
//       var activeWidthNewAnimHeight = $(this).innerHeight();
//       var activeWidthNewAnimWidth = $(this).innerWidth();
//       var itemPosNewAnimTop = $(this).position();
//       var itemPosNewAnimLeft = $(this).position();

//       $(".hori-selector").css({
//         top: itemPosNewAnimTop.top + "px",
//         left: itemPosNewAnimLeft.left + "px",
//         height: activeWidthNewAnimHeight + "px",
//         width: activeWidthNewAnimWidth + "px"
//       });
//     });
//   }

//   $(document).ready(function () {
//     setTimeout(function () {
//       test();
//     });
//   });
//   $(window).on("resize", function () {
//     setTimeout(function () {
//       test();
//     }, 500);
//   });

//   $(".navbar-toggler").click(function () {
//     setTimeout(function () {
//       test();
//     });
//   });

  const currentLocation = location.href;
  const menuItem = document.querySelectorAll('a');
  const menuLength = menuItem.length
                for (let i=0; i< menuLength ;i++){

              if(menuItem[i].href === currentLocation){
                menuItem[i].className = "nav-link active"
              }
                }

</script>

</body>

</html>