

// function showSponsers(){  
//     $.ajax({
//         url:"./adminView/viewAllProducts.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }
// function showPointtable(){  
//     $.ajax({
//         url:"./adminView/viewCategories.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }
// function showNews(){  
//     $.ajax({
//         url:"./adminView/viewSizes.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }
//  function showProductSizes(){  
//     $.ajax({
//         url:"./adminView/viewProductSizes.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//      });
// }

function showPlayers(){
    $.ajax({
        url:"../admin/viewPlayers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function showHighlights(){
    $.ajax({
        url:"../admin/viewHighlights.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

// function showHighlights(){
//     $.ajax({
//         url:"./adminView/viewAllOrders.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }

// function ChangeOrderStatus(id){
//     $.ajax({
//        url:"./controller/updateOrderStatus.php",
//        method:"post",
//        data:{record:id},
//        success:function(data){
//            alert('Order Status updated successfully');
//            $('form').trigger('reset');
//            showOrders();
//        }
//    });
// }

// function ChangePay(id){
//     $.ajax({
//        url:"./controller/updatePayStatus.php",
//        method:"post",
//        data:{record:id},
//        success:function(data){
//            alert('Payment Status updated successfully');
//            $('form').trigger('reset');
//            showOrders();
//        }
//    });
// }


//add product data
function addPlayer(){
    // var player_id = $('#player_id').val();
    var name = $('#player_name').val();
    var position = $('#position').val();
    var nationality = $('#nationality').val();
    var dob = $('#dob').val();
    var upload=$('#upload').val();
    var file=$('#image')[0].files[0];
    
    var fd = new FormData();
    fd.append('player_name', name);
    fd.append('position', position);
    fd.append('nationality', nationality);
    fd.append('dob', dob);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"../admin/controller/addPlayerController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Player added successfully!');
            $('form').trigger('reset');
            showPlayers();
        }
    });
}

// //edit product data
function playerEditForm(id){
    $.ajax({
        url:"../admin/editPlayerForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
// //edit highlight data
function highlightEditForm(id){
    $.ajax({
        url:"../admin/editHighlightForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//update product after submit
function updatePlayer(){
    var player_id = $('#player_id').val();
    var name = $('#player_name').val();
    var position = $('#position').val();
    var nationality = $('#nationality').val();
    var dob = $('#dob').val();
    //var category = $('#category').val();
    var existingImage = $('#existingImage').val();
    var newImage = $('#newImage')[0].files[0];
    var fd = new FormData();
    fd.append('player_id', player_id);
    fd.append('player_name', name);
    fd.append('position', position);
    fd.append('nationality', nationality);
    fd.append('dob', dob);
    // fd.append('category', category);
    fd.append('existingImage', existingImage);
    fd.append('newImage', newImage);
    $.ajax({
      url:'../admin/controller/updatePlayerController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success!');
        $('form').trigger('reset');
        showPlayers();
      }
    });
}



function updateHighlight(){
    var highlights_id = $('#highlights_id').val();
    var url = $('#url').val();
    var fd = new FormData();
    fd.append('highlights_id', highlights_id);
    fd.append('url', url);
    $.ajax({
      url:'../admin/controller/updateHighlightController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success!') ;
        $('form').trigger('reset');
        showHighlights();
      }
    });
}

//delete product data
function playerDelete(id){
    $.ajax({
            url:"../admin/controller/deletePlayerController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Player successfully deleted!');
            $('form').trigger('reset');
            showPlayers();
        }
    });
}


// //delete cart data
// function cartDelete(id){
//     $.ajax({
//         url:"./controller/deleteCartController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Cart Item Successfully deleted');
//             $('form').trigger('reset');
//             showMyCart();
//         }
//     });
// }

// function eachDetailsForm(id){
//     $.ajax({
//         url:"./view/viewEachDetails.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }



// //delete category data
// function categoryDelete(id){
//     $.ajax({
//         url:"./controller/catDeleteController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Category Successfully deleted');
//             $('form').trigger('reset');
//             showCategory();
//         }
//     });
// }

// //delete size data
// function sizeDelete(id){
//     $.ajax({
//         url:"./controller/deleteSizeController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Size Successfully deleted');
//             $('form').trigger('reset');
//             showSizes();
//         }
//     });
// }


// //delete variation data
// function variationDelete(id){
//     $.ajax({
//         url:"./controller/deleteVariationController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Successfully deleted');
//             $('form').trigger('reset');
//             showProductSizes();
//         }
//     });
// }

// //edit variation data
// function variationEditForm(id){
//     $.ajax({
//         url:"./adminView/editVariationForm.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }


// //update variation after submit
// function updateVariations(){
//     var v_id = $('#v_id').val();
//     var product = $('#product').val();
//     var size = $('#size').val();
//     var qty = $('#qty').val();
//     var fd = new FormData();
//     fd.append('v_id', v_id);
//     fd.append('product', product);
//     fd.append('size', size);
//     fd.append('qty', qty);
   
//     $.ajax({
//       url:'./controller/updateVariationController.php',
//       method:'post',
//       data:fd,
//       processData: false,
//       contentType: false,
//       success: function(data){
//         alert('Update Success.');
//         $('form').trigger('reset');
//         showProductSizes();
//       }
//     });
// }
// function search(id){
//     $.ajax({
//         url:"./controller/searchController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('.eachCategoryProducts').html(data);
//         }
//     });
// }


// function quantityPlus(id){ 
//     $.ajax({
//         url:"./controller/addQuantityController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('form').trigger('reset');
//             showMyCart();
//         }
//     });
// }
// function quantityMinus(id){
//     $.ajax({
//         url:"./controller/subQuantityController.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             $('form').trigger('reset');
//             showMyCart();
//         }
//     });
// }

// function checkout(){
//     $.ajax({
//         url:"./view/viewCheckout.php",
//         method:"post",
//         data:{record:1},
//         success:function(data){
//             $('.allContent-section').html(data);
//         }
//     });
// }


// function removeFromWish(id){
//     $.ajax({
//         url:"./controller/removeFromWishlist.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Removed from wishlist');
//         }
//     });
// }


// function addToWish(id){
//     $.ajax({
//         url:"./controller/addToWishlist.php",
//         method:"post",
//         data:{record:id},
//         success:function(data){
//             alert('Added to wishlist');        
//         }
//     });
// }