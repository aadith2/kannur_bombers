

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
function showSponsers(){
    $.ajax({
        url:"../admin/viewSponsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showPoints(){
    $.ajax({
        url:"../admin/viewPointTable.php",
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
function showNews(){
    $.ajax({
        url:"../admin/viewNews.php",
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
function addSponser(){
    // var player_id = $('#player_id').val();
    var name = $('#name').val();
    var file=$('#image')[0].files[0];
    
    var fd = new FormData();
    fd.append('name', name);;
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"../admin/controller/addSponserController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Sponser added successfully!' + data);
            $('form').trigger('reset');
            showSponsers();
        }
    });
}

function addPoint(){
    // var player_id = $('#player_id').val();
    var matches_played = $('#matches_played').val();
    var wins = $('#wins').val();
    var draws = $('#draws').val();
    var losses = $('#losses').val();
    var points = $('#points').val();
    var goals_scored = $('#goals_scored').val();
    var goals_conceded = $('#goals_conceded').val();
    var goal_difference = $('#goal_difference').val();
    
    
    var fd = new FormData();
    fd.append('matches_played', matches_played);
    fd.append('wins', wins);
    fd.append('draws', draws);
    fd.append('losses', losses);
    fd.append('points', points);
    fd.append('goals_scored', goals_scored);
    fd.append('goals_conceded', goals_conceded);
    fd.append('goal_difference', goal_difference);
    
    $.ajax({
        url:"../admin/controller/addPointController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Point added successfully!');
            $('form').trigger('reset');
            showPoints();
        }
    });
}


function addNews(){
    // var player_id = $('#player_id').val();
    var title = $('#title').val();
    var content = $('#content').val();
    var publication_date = $('#publication_date').val();
    var author = $('#author').val();
    
    var fd = new FormData();
    fd.append('title', title);
    fd.append('content', content);
    fd.append('publication_date', publication_date);
    fd.append('author', author);

    $.ajax({
        url:"../admin/controller/addNewsController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('News added successfully!');
            $('form').trigger('reset');
            showNews();
        }
    });
}


function addHighlight(){
    // var player_id = $('#player_id').val();
    var url = $('#url').val();
    var fd = new FormData();
    fd.append('url', url);
    $.ajax({
        url:"../admin/controller/addHighlightController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Highlight added successfully!');
            $('form').trigger('reset');
            showHighlights();
        }
    });
}

// //edit player data
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
// //edit point data
function pointEditForm(id){
    $.ajax({
        url:"../admin/editPointForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
// //edit News data
function NewsEditForm(id){
    $.ajax({
        url:"../admin/editNewsForm.php",
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

//upadate point after submit
function updatePoint(){
    var points_table_id = $('#points_table_id').val();
    var matches_played = $('#matches_played').val();
    var wins = $('#wins').val();
    var draws = $('#draws').val();
    var losses = $('#losses').val();
    var points = $('#points').val();
    var goals_scored = $('#goals_scored').val();
    var goals_conceded = $('#goals_conceded').val();
    var goal_difference = $('#goal_difference').val();

    var fd = new FormData();
    fd.append('points_table_id', points_table_id);
    fd.append('matches_played', matches_played);
    fd.append('wins', wins);
    fd.append('draws', draws);
    fd.append('losses', losses);
    fd.append('points', points);
    fd.append('goals_scored', goals_scored);
    fd.append('goals_conceded', goals_conceded);
    fd.append('goal_difference', goal_difference);
   
    $.ajax({
      url:'../admin/controller/updatePointController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Point Update Success!');
        $('form').trigger('reset');
        showPoints();
      }
    });
}
//update News after submit
function updateNews(){
    var news_id = $('#news_id').val();
    var title = $('#title').val();
    var content = $('#content').val();
    var publication_date = $('#publication_date').val();
    var author = $('#author').val();
    //var category = $('#category').val();
    var fd = new FormData();
    fd.append('news_id', news_id);
    fd.append('title', title);
    fd.append('content', content);
    fd.append('publication_date', publication_date);
    fd.append('author', author);
    // fd.append('category', category);
    $.ajax({
      url:'../admin/controller/updateNewsController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('News Update Success!');
        $('form').trigger('reset');
        showNews();
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
function pointDelete(id){
    $.ajax({
            url:"../admin/controller/deletePointController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Point successfully deleted!');
            $('form').trigger('reset');
            showPoints();
        }
    });
}
function NewsDelete(id){
    $.ajax({
            url:"../admin/controller/deleteNewsController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('News successfully deleted!');
            $('form').trigger('reset');
            showNews();
        }
    });
}
function highlightDelete(id){
    $.ajax({
            url:"../admin/controller/deleteHighlightController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Highlight successfully deleted! ');
            $('form').trigger('reset');
            showHighlights();
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