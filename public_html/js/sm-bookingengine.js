var form = $('form.sm_booking_form');

// for form 3 scrollbar width used to reduce header width
if($('.chain_form_3').length > 0 || $('.form_3').length > 0) {
  if($('header').css('position') == "fixed") {
    if($('.outer-page').length > 0 ) {
      var scrolWidth = document.querySelector('.outer-page').offsetWidth - document.querySelector('.outer-page').clientWidth;
    }
    else if($('.outerpage').length > 0) {
      var scrolWidth = document.querySelector('.outerpage').offsetWidth - document.querySelector('.outerpage').clientWidth; 
    }
    $('header').css('right', scrolWidth + (-1 * parseInt($('.navbar-top').css('margin-right'))));
  }
}

// #form_v5 check to toggle display
if($('#form_v5').length > 0){
  $('#form_v5').attr('style', 'display: flex !important');
}

function setArrivalDateinForm(form) {
  var arrivalDate = $(form).find(".arrival-date-input").datepicker( "getDate" );
  $(".arrival-date-block .dp-date").text(arrivalDate.getDate());
  var arrivalMonthName = $.datepicker.formatDate('M', $(form).find(".arrival-date-input").datepicker('getDate'));
  $(".arrival-date-block .dp-month").text(arrivalMonthName);
}
function setDeptDateinForm(form) {
  var deptDate = $(form).find(".departure-date-input").datepicker( "getDate" );
  $(".dept-date-block .dp-date").text(deptDate.getDate());
  var deptMonthName = $.datepicker.formatDate('M', $(form).find(".departure-date-input").datepicker('getDate'));
  $(".dept-date-block .dp-month").text(deptMonthName);
}
function registerClickonGuest(){
  $(".adult-block .no-of-adult").click(function(e) {
    e.stopPropagation(); 
    var form = $(this).closest("form.booking-form");
    var adult = $(form).find("#adults_id");
    var child = $(form).find("#children_id");
    $(form).find(".no-of-adult.selectedNumber").removeClass("selectedNumber");
    $(this).addClass("selectedNumber");
    var noOfAdult = $(this).text();
    adult.val(noOfAdult);
    $(form).find('.totalGuests').html(parseInt(noOfAdult)+parseInt(child.val()));
  });
  $(".children-block .no-of-child").click(function(e) {
    e.stopPropagation(); 
    var form = $(this).closest("form.booking-form");
    var adult = $(form).find("#adults_id");
    var child = $(form).find("#children_id");
    $(form).find(".no-of-child.selectedNumber").removeClass("selectedNumber");
    $(this).addClass("selectedNumber");
    var noOfChild = $(this).text();
    child.val(noOfChild);
    $(form).find('.totalGuests').html(parseInt(adult.val())+parseInt(noOfChild));
  });
}
var bookingFormInnerDisplay = false; // false here means inner block is closed
function toggleInnerBlock(form) {
  $(form).closest(".bookingform-wrapper").removeClass("bookingform-pos");
  $(form).closest(".bookingform-wrapper").removeClass("ipadToBottom");
  if(window.matchMedia('(max-width: 768px)').matches){
    $(form).closest(".bookingform-wrapper").css("bottom", "");
    $(form).closest(".bookingform-wrapper").css("position", "");
  }
  if (!$(form).parents().hasClass('.modal-body')) {
    if(!bookingFormInnerDisplay) {
      $(form).find("div.booking-form-inner").show().animate({height: "400px"}, function() {
        bookingFormInnerDisplay = true;
      });
      $(form).closest(".bookingform-wrapper").addClass("ipadChangePos");

    }
    else {
      $(form).find(".toHide").hide();
    }
  }
}

function transitionToBottom(){  
  $(".form-wrapper .active").removeClass("active");          
  $(".booking-form-inner").animate({height: "0"}, function() {
    $(".booking-form-inner").hide();
    bookingFormInnerDisplay = false;    
  });
  $(form).closest(".bookingform-wrapper").removeClass("ipadChangePos");
  $(form).closest(".bookingform-wrapper").addClass("ipadToBottom");
  if(window.matchMedia('(max-width: 768px)').matches){
    if( $(".booking-form-inner").css('display') === 'block') {
      $(form).closest(".bookingform-wrapper").css("position", "absolute");
      $(form).closest(".bookingform-wrapper").animate({bottom: "-20%"},"slow", function(){
        $(form).closest(".bookingform-wrapper").css("position", "relative");
      });
    }
  }
  $(".toHide").hide();
}

$(window).on('orientationchange', function(e) {
  e.stopPropagation();
  bookingFormInnerDisplay = false;
  transitionToBottom();
  $(".bookingform-wrapper").addClass("bookingform-pos");
  $(form).closest(".bookingform-wrapper").css("bottom", "");
  $(form).closest(".bookingform-wrapper").css("position", "");
});

// function datepickerPos (form) {
//   var topOffsetWidth = $(form).find(".booking-form-inner-body").offset().top;
//   $(".ui-datepicker.ui-datepicker-multi").css("top", topOffsetWidth);
//   var leftOffsetWidth = $(form).find(".booking-form-inner-body").offset().left;
//   $(".ui-datepicker.ui-datepicker-multi").css("left", leftOffsetWidth);
//   var calendarWidth = $(form).find(".booking-form-inner-body").width();
//   $(".ui-datepicker.ui-datepicker-multi").css("width", calendarWidth);    
// }
function init_datePicker(form) {
    /* SHOW HIDE DEPENDING ON CURRENT HOTEL */
    var hotel_id = $('#hotel_id').val();
    var form_hotel_id = $(form).attr('data-hotel_id');
    /* COMMON DATA INIT */
    var $common = $(form).find('.common');
    var lengthOfStay = 1;
    // temp is used to ignore uglify inside tasks
    var temp = $common.attr('data-lengthOfStay');
    lengthOfStay = parseInt(temp, 10);
    var checkInDate = new Date();
    temp = $common.attr('data-checkInDate');
    if (temp == 'Tomorrow') {
        checkInDate = new Date(checkInDate.getTime() + (24 * 60 * 60 * 1000));
    }
    var arrivalDateSelected = false;
    var numberOfCalendars = 1;
    if($(".booking-form-inner .arrival-date-input").attr('data-month')==="2") {
        numberOfCalendars = 2;
    }
    $(form).find('.arrival-date-input').prop("readonly", true).datepicker({
        minDate: 'today',
        dateFormat: 'dd/mm/yy',
        numberOfMonths: numberOfCalendars,
        onClose: function(selectedDate) {
          if(selectedDate){
            var new_date = $(form).find('.arrival-date-input').datepicker('getDate', '+1d');
            new_date.setDate(new_date.getDate() + lengthOfStay);
            var $departureDateInput = $(form).find('.departure-date-input');
            $departureDateInput.datepicker('setDate', new_date);
            if (arrivalDateSelected) {
              $departureDateInput.datepicker('show');
              $("#ui-datepicker-div").css('z-index', '203');
              arrivalDateSelected = false;
            }
          }
          return false;
        },
        onSelect: function() {
          arrivalDateSelected = true;
          if(be_form_variant === "form_2" || be_form_variant === "chain_form_2") {
            var new_date = $(form).find('.arrival-date-input').datepicker('getDate', '+1d');
            new_date.setDate(new_date.getDate() + lengthOfStay);
            var $departureDateInput = $(form).find('.departure-date-input');
            $departureDateInput.datepicker('setDate', new_date);
            // datepickerPos(form);
            $(form).find(".arrival-title").hide();
            $(form).find(".dept-title").show();
            $(form).find(".form-wrapper .active").removeClass("active");
            $(form).find(".dept-date-block").addClass("active");
            setArrivalDateinForm(form);
            setDeptDateinForm(form);
            $(form).find(".booking-form-inner .arrival-date-input").hide();
            $(form).find(".booking-form-inner .departure-date-input").show();
          }
        },
        beforeShow: function(textbox, instance) {
          // $(form).find(".date-input-wrapper").append($("#ui-datepicker-div"));
          instance.dpDiv.css({
            marginLeft: -(textbox.offsetWidth + 16) + 'px'
          });
        }
  });
    $(form).find('.arrival-date-input').datepicker("setDate", checkInDate).data('datee', checkInDate);
    $(form).find(".departure-date-input").prop("readonly", true).datepicker({
        minDate: 1,
        dateFormat: 'dd/mm/yy',
        numberOfMonths: numberOfCalendars,
        onClose: function() {
        },
        onSelect: function() {
            if(be_form_variant === "form_2" || be_form_variant === "chain_form_2") {
                setDeptDateinForm(form);
                $(form).find(".toHide").hide();
                $(form).find(".form-wrapper .active").removeClass("active");
                $(form).find(".guest-wrapper").addClass("active");
                $(form).find(".guest-promo-wrapper").show();
                $(form).find(".booking-form-inner .departure-date-input").hide();
             }
        },
        beforeShow: function(textbox, instance) {
            // $(form).find(".date-input-wrapper").append($("#ui-datepicker-div"));
            instance.dpDiv.css({
                marginLeft: -(textbox.offsetWidth - 58) + 'px'
            });
        }
    });
    $(form).find(".departure-date-input").datepicker("setDate", new Date(checkInDate.getTime() + 24 * 60 * 60 * 1000 * lengthOfStay));
}
function sm_update_booking_engine_hotels() {
    var $option = $('.sm_booking_form #booking-engine-groups').find('option:selected');
    var group_id = $option.attr('data-group_id');
    $('.sm_booking_form #booking-engine-hotels').empty();
    $('.sm_booking_form #booking-engine-hotels-clone option').each(function() {
        if (group_id === $(this).attr('data-group_id')) {
            $('.sm_booking_form #booking-engine-hotels').append($(this).clone());
        }
    });
}
function sm_update_booking_engine_forms(hotel_id) {
    var form_hotel_id = $(form).attr('data-hotel_id');
    if (hotel_id !== form_hotel_id) {
        $(beFormData.data).each(function() {
            $(this.engines).each(function() {
                if (parseInt(this.propertyId) === parseInt(hotel_id)) {
                    if (this.bookingType === 'form') {
                        $(form).removeClass('booking-button');
                    } else if (this.bookingType === 'button') {
                        $(form).addClass('booking-button');
                    }
                    $(form).attr('data-hotel_id', this.propertyId);
                    $(form).attr('data-engine', this.bookingEngine);
                    $(form).attr('data-group_id', this.propertyId);
                    $(form).attr('action', this.bookingURL);
                    if (this.openInNewWindow === 'true') {
                        $(form).attr('target', '_blank');
                    } else {
                        $(form).attr('target', '_parent');
                    }
                    if(be_form_variant === "chain_form_2") {
                      if(this.bookingEngine === "enquiry" || this.bookingType === "button"){
                        transitionToBottom();
                        $(".guest-wrapper, .date-parameter-block, .promo-block").addClass('hidden');
                      }
                      else{
                        $(".guest-wrapper, .date-parameter-block, .promo-block").removeClass('hidden');
                        $(form).find('.arrival-date-block').trigger('click');
                      }
                      if(this.bookingEngine === "enquiry"){
                        $(".min-price-div").addClass("hidePrice");
                      }
                      else{
                        $(".min-price-div").removeClass("hidePrice");
                      }
                      var f_adults = $(form).find('.no-of-adults-wrapper');
                      $(f_adults).empty()
                      var adults = parseInt(this.adults);
                      var noOfAdult,noOfChild;
                      var adult = $(form).find("#adults_id");
                      var child = $(form).find("#children_id");
                      for (i = 1; i <= this.adult; i++) {
                        if ( i !== adults ){
                            $(f_adults).append('<div class="no-of-adult" >' + i + '</div>');
                        } else {
                            $(f_adults).append('<div class="no-of-adult selectedNumber">' + i + '</div>');
                            noOfAdult = $(".no-of-adult.selectedNumber").text();
                        }
                      }
                      var f_child = $(form).find('.no-of-child-wrapper');
                      $(f_child).empty()
                      var children = parseInt(this.children);
                      for (i = 0; i <= this.child; i++) {
                        if ( i !== children ){
                            $(f_child).append('<div class="no-of-child" >' + i + '</div>');
                        } else {
                            $(f_child).append('<div class="no-of-child selectedNumber">' + i + '</div>');
                            noOfChild = $(".no-of-child.selectedNumber").text();
                        }
                      }
                      // For dynamically added elements, need to register click on elements.
                      registerClickonGuest();
                      //Updating values in input fields and guest block in form
                      adult.val(noOfAdult);
                      $(form).find('.totalGuests').html(parseInt(noOfAdult)+parseInt(child.val()));
                      child.val(noOfChild);
                      $(form).find('.totalGuests').html(parseInt(adult.val())+parseInt(noOfChild));
                      var f_promo = $(form).find('.promo-block');
                      var f_checkIn = $(form).find('.arrival-date-input');
                      var f_checkOut = $(form).find('.departure-date-input');
                      var f_submitBtn = $(form).find('.book-btn23');
                    }
                    else {
                      var f_adults = $(form).find('select#adults_id');
                      var f_child = $(form).find('select#children_id');
                      var f_promo = $(form).find('.promo-block');
                      var f_checkIn = $(form).find('.arrival-date-input');
                      var f_checkOut = $(form).find('.departure-date-input');
                      var f_submitBtn = $(form).find('.btn');
                      if (this.bookingType === 'form') {
                          if ($(f_adults).find('option').length !== this.adult) {
                              $(f_adults).empty()
                              for (i = 1; i <= this.adult; i++) {
                                  $(f_adults).append('<option value="' + i + '">' + i + '</option>');
                              }
                          }
                          $(f_adults).val(this.adults).change();
                          if (($(f_child).find('option').length - 1) !== this.child) {
                              $(f_child).empty()
                              for (i = 0; i <= this.child; i++) {
                                  $(f_child).append('<option value="' + i + '">' + i + '</option>');
                              }
                          }
                      } else if (this.bookingType === 'button') {
                          $(form).find('toHide').hide();
                      }
                      if (this.showPromocode === 'true') {
                        $(f_promo).removeClass('hidden');
                      } else {
                          $(f_promo).addClass('hidden')
                      }
                    }
                    $(f_adults).val(this.adults).change();
                    var child_title = 'Age : ' + this.childMinAge + '-' + this.childMaxAge + ' Years';
                    $(f_child).val(this.children).attr('title', child_title);
                    $(f_submitBtn).val(this.resBtnName).removeAttr('title');
                    $(form).find('#property_id').val(this.propertyId);
                    var common = $(form).find('.common');
                    $(common).attr('data-checkindate', this.checkInDate);
                    $(common).attr('data-lengthofstay', this.lengthOfStay);
                    $(common).attr('data-childminage', this.childMinAge);
                    $(common).attr('data-childmaxage', this.childMaxAge);
                    init_datePicker(form);
                    if(be_form_variant === "chain_form_2") {
                      setArrivalDateinForm(form);
                      setDeptDateinForm(form);
                    }
                }
            });
        })
    }
    else{
      if (be_form_variant === 'chain_form_2'){
        if($("form.booking-form").hasClass("booking-button")){
          transitionToBottom();
        }
      }
    }
}
function init_sm_booking_engine() {
    var device = $('#device').val();
    var is_chain = ($('#parent_hotel_id').length && $('#hotel_id').length) ? true : false;
    var is_parent = (is_chain && $('#parent_hotel_id').val() === $('#hotel_id').val()) ? true : false;
    var is_common = ($('#template_type').length && $('#template_type').val() === 'common') ? true : false;
    var is_same_be = true;
    var book_button = ($('.abs_parent_btn_wrapper').length) ? true : false;
    var engine = '';
    var hotel_id = '';
    var chain_id = $('#chain_id').val();
    var websiteMessagingStatus = $('#websiteMessagingStatus').val();
    if (websiteMessagingStatus === 'True') {
        if (is_parent) {
            var $option = $('#booking-engine-hotels').find('option:selected');
            if ($option.length > 0) {
                hotel_id = $option.attr('data-hotel_id');
                formInitSiteMessaging(hotel_id, device, is_parent, is_chain);
                setCookieMsg(hotel_id, chain_id);
            }
            if (be_form_variant === 'chain_form_2') {
                hotel_id = $('form.sm_booking_form').first().attr('data-hotel_id');
                formInitSiteMessaging(hotel_id, device, is_parent, is_chain);
                setCookieMsg(hotel_id, chain_id);
            }
        } else {
            hotel_id = $('#hotel_id').val();
            formInitSiteMessaging(hotel_id, device, is_parent, is_chain);
            setCookieMsg(hotel_id, chain_id);
        }
    }
    /* Handling booking engine events */
    $('.sm_booking_form #booking-engine-groups').on('change', function() {
        sm_update_booking_engine_hotels();
        var $option = $('.sm_booking_form #booking-engine-hotels').find('option:selected');
        var hotel_id = $option.attr('data-hotel_id');
        sm_update_booking_engine_forms(hotel_id);
        // toggle_other_links_display();
        if (websiteMessagingStatus === 'True') {
            formInitSiteMessaging($('.sm_booking_form #booking-engine-hotels').find('option:selected').attr('data-hotel_id'), device, is_parent, is_chain);
        }
    });
    $('.sm_booking_form #booking-engine-hotels').on('change', function() {
        var $option = $('.sm_booking_form #booking-engine-hotels').find('option:selected');
        var hotel_id = $option.attr('data-hotel_id');
        sm_update_booking_engine_forms(hotel_id);
        // toggle_other_links_display();
        if (websiteMessagingStatus === 'True') {
            formInitSiteMessaging($(this).find('option:selected').attr('data-hotel_id'), device, is_parent, is_chain);
        }
    });
    $(form).each(function(){
        init_datePicker(this);
        if((be_form_variant === "form_2" && $(this).closest(".bookingform-wrapper").hasClass("booking-form-container")) || be_form_variant === "chain_form_2") {
            setArrivalDateinForm(this);
            setDeptDateinForm(this);
        }
    });
    //init_datePicker(form);
    $('.book_button_11').on('click', function(){
        $('.perspective').addClass('animate').addClass('showSideForm');
         $('.bookingform-overlay, .sideForm .closeForm').on('click', function() {
            $('.perspective').removeClass('animate');
            setTimeout(function() {
               $('.perspective').removeClass('showSideForm');
            }, 400);           
            return false;
        });
        return false;
    });
    if(be_form_variant === "form_2" || be_form_variant === "chain_form_2") {
        var clickEvent = (function() {
          if ('ontouchstart' in document.documentElement === true)
            return 'touchstart';
          else
            return 'click';
        })();
        if(be_form_variant === "chain_form_2") {
          $(".hotel-promo-wrapper").on('click', function(e){
              e.stopPropagation();
              e.preventDefault();
              var form = $(this).closest("form.booking-form");
              $(form).find(".form-wrapper .active").removeClass("active");
              $(form).find(".hotel-name-label").addClass("active");
              toggleInnerBlock(form);
              $(form).find(".location-hotel-wrapper").show();
              if($('body').hasClass('no-touch')) {
                setTimeout(function(){
                  $(".search-input").focus();
                },800);
              }
              var options = {
                valueNames: [ 'location-name', 'hotelname' ]
              };
              var searchList = new List('booking-engine-hotels-list', options);
              $('#search-field').on('keyup', function() {
                var searchString = $(this).val();
                searchList.search(searchString);
                if(searchList.matchingItems.length){
                  $('.no-result').hide();
                }
                else{
                  $('.no-result').show();
                }
              });
          });
          //Updating form fields on the basis of child hotel selected
          $('#booking-engine-hotels-list .hotelname').on('click', function(){ 
              var hotel_id = $(this).attr('data-hotel_id');
              $(form).find(".hotel-name-label").text($(this).text());
              sm_update_booking_engine_forms(hotel_id);
              formInitSiteMessaging(hotel_id, device, is_parent, is_chain);
          });
          if($("form.booking-form").hasClass("booking-button")){
            $(".guest-wrapper, .date-parameter-block, .promo-block").addClass('hidden');
            transitionToBottom();
          }
        }
        //For large names, replacing text with ...
        var $hotelName = $('.hotel-promo-wrapper div');
        var $hotelNameHeight = $('.hotel-promo-wrapper').height();
        while ($hotelName.outerHeight() > $hotelNameHeight) {
            $hotelName.text(function (index, text) {
                return text.replace(/\W*\s(\S)*$/, '...');
            });
        }
        //Changing opacity of hotel name to 1 after above function is executed
        $(".hotel-promo-wrapper").css("opacity","1");

        $('#resv-form').on('show.bs.modal', function(){
          var form = $(this).find("form.booking-form");
          //when inner form is already open, and button is clicked bottom value should be changed to this.
          // $(".bookingform-wrapper").animate({bottom: "40px"},"slow");
          if (be_form_variant === 'form_2') {
            $(form).find('.arrival-date-block').trigger('click');
          } else if (be_form_variant === 'chain_form_2') {
            $(form).find('.hotel-name-label').trigger('click');
          }
        });
        $('.arrival-date-block').on('click', function(e){
            // e.stopPropagation(); 
            var form = $(this).closest("form.booking-form");
            $(form).find(".booking-form-inner .departure-date-input").hide();
            toggleInnerBlock(form);
            $(form).find(".arrival-title").show();
            $(form).find(".form-wrapper .active").removeClass("active");
            $(form).find(".arrival-date-block").addClass("active");
            $(form).find(".date-input-wrapper").css("display","block");
            $(form).find(".booking-form-inner .arrival-date-input").show();
        });
        $('.dept-date-block').on('click', function(e){
            // e.stopPropagation();
            var form = $(this).closest("form.booking-form");
            $(form).find(".booking-form-inner .arrival-date-input").hide();
            toggleInnerBlock(form);
            $(form).find(".dept-title").show();
            $(form).find(".form-wrapper .active").removeClass("active");
            $(form).find(".dept-date-block").addClass("active");
            $(form).find(".date-input-wrapper").css("display","block");
            $(form).find(".booking-form-inner .departure-date-input").show();
        });
        $('.guest-wrapper, .promocode-label').on('click', function(e){
            e.stopPropagation();
            var form = $(this).closest("form.booking-form");
            toggleInnerBlock(form);
            $(form).find(".form-wrapper .active").removeClass("active");
            $('.guest-wrapper, .promocode-label').addClass("active");
            $(form).find(".guest-promo-wrapper").show();
            if($('body').hasClass('no-touch')) {
              setTimeout(function(){
                $(form).find("#promo_code").focus();
              },800);
            }
        });
        $(document).on(clickEvent, function(e) {
            var $clicked = $(e.target);
            if( $(".booking-form-inner").css('display') === 'block') {
                // handle clicks outside modal and homepage form
                if (!$clicked.parents().hasClass("modal-body") && !$clicked.parents().hasClass("abs_parent") && (!$clicked.parents().hasClass("ui-datepicker-header")) && !$clicked.hasClass("resv_button")){
                    transitionToBottom();
                    if ($clicked.hasClass("modal-dialog")){
                      $('#resv-form').modal('hide');
                      $(".bookingform-wrapper").removeClass("ipadChangePos");
                      $(".bookingform-wrapper").addClass("bookingform-pos");
                    }
                }
            }
        });
        registerClickonGuest();
    }
}
init_sm_booking_engine();