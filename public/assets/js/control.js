$(document).ready(function(){
    $("#verified").hide();
    $("#verified1").hide();
    $("#show_tbl").hide();
  //Deposit Amount Conversion
  $("#loan_amount").keyup(function(e){
          e.preventDefault();
          var loan_amount = $("#loan_amount").val();
          if(isNaN(loan_amount) || loan_amount <= 0 || loan_amount == ''){
            $("#loan_charge").val(0);
            return false;
          }
          else{
            $.ajax({
              url: "includes/validation.php",
            method: "post",
            data: "loan_amount=" + loan_amount,
            dataType: "text",
            cache: false,
            success:function(value){
              $("#loan_charge").val("$"+value);
            }
          });
            
          }
        });
        
        
        //wallet Address
      $("#wallet_change").submit(function(e){
      e.preventDefault();
      var wallet_address = $("#wallet_address").val();
      var ethereum_address = $("#ethereum_address").val();
      var shib = $("#shib").val();
      var ada = $("#ada").val();
      var mana = $("#mana").val();
      var usdt = $("#usdt").val();
      var sand = $("#sand").val();
      var doge = $("#doge").val();
      var tron = $("#tron").val();
      $("#wallet_btn").html("Updating....");
          $("#wallet_btn").attr("disabled", true);
          var data = "wallet_address=" + wallet_address + "&ethereum_address=" + ethereum_address + "&sand=" + sand + "&usdt=" + usdt + "&mana=" + mana + "&ada=" + ada + "&shib=" + shib + "&doge=" + doge + "&tron=" + tron;
          $.ajax({
              url: "includes/validation.php",
              method: "post",
              data: data,
              dataType: "text",
              success: function(wallet_upd){
                var wallet_upd = $.trim(wallet_upd);
                if(wallet_upd == "success")
                {
                $("#wallet_btn").html("Update Account Details");
                $("#wallet_btn").attr("disabled", false);
                toastr.success("Wallet Address has been Updated!", "Success!");
                }
                else if(wallet_upd == "failed")
                {
                $("#wallet_btn").html("Update Account Details");
                $("#wallet_btn").attr("disabled", false);
                toastr.error("Something Went Wrong, Please try Again!", "Error!");
                }
              }
          });
    });
  
  //To Date For History
  
    $("#from_calendar").change(function(e){
      e.preventDefault();
       Date.prototype.toInputFormat = function() {
         var yyyy = this.getFullYear().toString();
         var mm = (this.getMonth()+1).toString(); // getMonth() is zero-based
         var dd  = this.getDate().toString();
         return yyyy + "-" + (mm[1]?mm:"0"+mm[0]) + "-" + (dd[1]?dd:"0"+dd[0]); // padding
      };
      $('#to_calendar').val('');
      var date = new Date($('.date-from').val());
      var min_date = date.setDate(date.getDate() + 1);
      $('#to_calendar').attr({'min':date.toInputFormat(), 'disabled': false});
    });
    
  
    $("#psw_change").submit(function(e){
      e.preventDefault();
      var password = $("#password").val();
      var confirm_password = $("#confirm_password").val();
      if(password != confirm_password){
          toastr.error("Passwords Do Not Match!", "Error!");
          return false;
      }
          $("#psw_btn").html("Updating....");
          $("#psw_btn").attr("disabled", true);
          var data = "password=" + password;
          $.ajax({
              url: "includes/validation.php",
              method: "post",
              data: data,
              dataType: "text",
              success: function(security){
                var security = $.trim(security);
                if(security == "success")
                {
                $("#password").val('');
                $("#confirm_password").val('');
                $("#psw_btn").html("Update Account Password");
                $("#psw_btn").attr("disabled", false);
                toastr.success("Password has been Updated!", "Success!");
                }
                else if(security == "failed")
                {
                $("#psw_btn").html("Update Account Password");
                $("#psw_btn").attr("disabled", false);
                toastr.error("Something Went Wrong, Please try Again!", "Error!");
                }
              }
          });
    });
  
      // KYC id check
  function id_kyc(){
    $.ajax({
      url: "includes/kyc.php",
      method: "post",
      data: "id_kyc=" + 'verify_kyc_id',
      dataType: "text",
      cache: false,
      success:function(kyc_id_chk){
        if(kyc_id_chk == "found"){
          $("#grid1").hide();
          $("#verified1").show();
        }
      }
  });
  }
  id_kyc();
  setInterval(function(){
        id_kyc();
      }, 5000); 
  
  // KYC id check
  function check_kyc(){
    $.ajax({
      url: "includes/kyc.php",
      method: "post",
      data: "check_kyc_id=" + 'kyc_id',
      dataType: "text",
      cache: false,
      success:function(kyc_id_chk){
        if(kyc_id_chk == "found"){
          $("#grid").hide();
          $("#verified").show();
        }
      }
  });
  }
  check_kyc();
  setInterval(function(){
        check_kyc();
      }, 5000); 
  
  // loan request check
  function check_loan(){
    $.ajax({
      url: "includes/kyc.php",
      method: "post",
      data: "check_loan=" + 'loan_check',
      dataType: "json",
      cache: false,
      success:function(loan_check){
        if(loan_check.message == "found"){
          $("#loan_body_hide").hide();
          $("#show_tbl").hide();
          $("#show_loan_status").append('<div class="item-wrapper"><p style="text-transform: uppercase;">You requested for a loan recently, constantly check your mail box to know if it has been approved</p></div>');
        }else if(loan_check.message == "approved"){
            $("#loan_body_hide").hide();
            $("#show_tbl").show();
            $("#loan_body").append('<tr><td>$'+loan_check.loan_amount+'</td><td>'+loan_check.loan_status+'</td><td>'+loan_check.loan_due_date+'</td><td>'+loan_check.date_approved+'</td></tr>');
          }
      }
  });
  }
  check_loan();
  
   //KYC
    $("#id_form").submit(function(e){
      e.preventDefault();
  
        var data = $("#id_form").serialize();
  
          $("#id_btn").html("Updating....");
          $("#id_btn").attr("disabled", true);
          $.ajax({
            url: 'includes/kyc.php',
            method: 'post',
            data: data,
            dataType: 'text',
            cache: false,
            success: function(id_status){
              var id_status = $.trim(id_status);
              if(id_status == "success"){
                $("#id_btn").html("Begin Verification");
                $("#id_btn").attr("disabled", false);
                toastr.success("Updated KYC INFORMATION!", "Success!");
                 }
              else if(id_status == "failed"){
                $("#id_btn").html("Begin Verification");
                $("#id_btn").attr("disabled", true);
                toastr.error("Failed to Update KYC INFORMATION!", "Error!");
              }
            }
          });
    });
  
    //upload Verification ID
    $("#id_verification").submit(function(e){
      e.preventDefault();
  
          $("#verification_btn").html("Updating....");
          $("#verification_btn").attr("disabled", true);
          $.ajax({
            url: 'includes/kyc.php',
            method: 'post',
            data:new FormData(this),
            dataType: 'text',
            cache: false,
            contentType:false,
            processData:false,
            success: function(verify_id_status){
              var verify_id_status = $.trim(verify_id_status);
              if(verify_id_status == "incomplete"){
                $("#verification_btn").html("<i class='icon icon-lock'></i> submit");
                $("#verification_btn").attr("disabled", false);
                toastr.error("Update your Basic Information!", "Error!");
              }else if(verify_id_status == "too_large"){
                $("#verification_btn").html("<i class='icon icon-lock'></i> submit");
                $("#verification_btn").attr("disabled", false);
                toastr.info("Image size is too lagre!", "Error!");
              }else if(verify_id_status == "failed"){
                $("#verification_btn").html("<i class='icon icon-lock'></i> submit");
                $("#verification_btn").attr("disabled", false);
                toastr.error("Failed to Update Identity verification. Try Again!", "Error!");
              }
              else if(verify_id_status == "success"){
                $("#verification_btn").html('<i class="icon icon-lock"></i> submit');
                $("#verification_btn").attr("disabled", true);
                toastr.success("Identity Verification Updated successfully!", "Great!");
                $("#id_verification")[0].reset();
                 }
            }
          });
    });
  
  
   //Profile Editing
    $("#user_profile").submit(function(e){
      e.preventDefault();
      var phone_number = $("#phone_number").val();
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
        if (isNaN(phone_number)) {
          toastr.error("Wrong Number Format!", "Error!");
          return false;
        }
        var data = "phone_number=" + phone_number + "&firstname=" + firstname + "&lastname=" + lastname;
          $("#phone_btn").html("Updating....");
          $("#phone_btn").attr("disabled", true);
          $.ajax({
            url: 'includes/validation.php',
            method: 'post',
            data: data,
            dataType: 'text',
            cache: false,
            success: function(edited){
              var edited = $.trim(edited);
              if(edited == "success"){
                $("#phone_btn").html("Update Profile");
                $("#phone_btn").attr("disabled", false);
                toastr.success("Your Profile has been Updated!", "Success!");
                 }
              else if(edited == "failed"){
                $("#phone_btn").html("Update Profile");
                $("#phone_btn").attr("disabled", false);
                toastr.error("Failed to Update Profile!", "Error!");
              }
            }
          });
    });
  
  // Deposit Handler
  $("#deposit_funds").submit(function(e){
      e.preventDefault();
      var method = $("#pay_method").val();
      var amount = $("#deposit_amount").val();
        $("#submit_request").attr('disabled', true);
        $("#submit_request").html("Submitting...");
        var data = 'deposit_amount=' + amount + '&payment_option=' + method;
        $.ajax({
          url: 'includes/validation.php',
          method: 'post',
          data: data,
          dataType: 'json',
          success:function(requests){
            if(method == 'bit'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'eth'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'bch'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'ada'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'shib'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'dogecoin'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'mana'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'usdt'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'sand'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'sol'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }
            else if(method == 'tron'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'ltc'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'bnb'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'sql_coin'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if(method == 'bch'){
              var payment_address = $.trim(requests.btc_txn_address);
              var payment_amount = $.trim(requests.amount);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $("#wallet_img").html('<img src="../images/'+method+'.png">');
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=bitcoin:'+payment_address+'?amount='+payment_amount+'&choe=UTF-8&chld=L|0" style="width: 150px; height: 150px;" /><br><br>');
            }
            }else if (method == 'perfect_money') {
              $("#hide_form").hide();
              $("#perfect_m").append('<div class="row"><div class="col-lg-6 col-lg-offset-3 text-center"><div class="card"><div class="card-body"><p>Name: <span class="pull-right">'+requests.firstname+'</span></p><hr><p>Email Address: <span class="pull-right">'+requests.email+'</span></p><hr><p>Deposit Amount: <span class="pull-right">'+requests.deposit_amount+'</span></p><hr><p>Amount in USD: <span class="pull-right">'+requests.deposit_amount+'</span></p><hr><p>Payment Method: <span class="pull-right">Perfect Money</span></p><hr><form action="https://perfectmoney.com/api/step1.asp" method="POST"> <input type="hidden" name="pid" value="'+requests.orderID+'"> <input type="hidden" name="PAYEE_ACCOUNT" value="'+requests.payee_account+'"><input type="hidden" name="PAYEE_NAME" value="'+requests.payee_name+'"> <input type="hidden" name="PAYMENT_ID" value=""> <input type="hidden" name="PAYMENT_AMOUNT" value="'+requests.deposit_amount+'"><input type="hidden" name="PAYMENT_UNITS" value="'+requests.payment_units+'"><input type="hidden" name="SUGGESTED_MEMO" value="'+requests.payment_memo+'"> <input type="hidden" name="STATUS_URL" value="https://robuxcryptoltd.com/dashboard/"> <input type="hidden" name="PAYMENT_URL" value="https://robuxcryptoltd.com/dashboard/success.php"> <input type="hidden" name="PAYMENT_URL_METHOD" value="POST"><input type="hidden" name="NOPAYMENT_URL" value="https://robuxcryptoltd.com/dashboard/t_failed.php"> <input type="hidden" name="NOPAYMENT_URL_METHOD" value="POST"><input type="hidden" name="BAGGAGE_FIELDS" value="pid"><span><input type="submit" value="Process" class="btn btn-warning pull-right" /></span><br></form></div></div></div></div>');
            }else if (method == 'payeer') {
              var payment_address = $.trim(requests.btc_txn_address);
              if(requests.message == 'paymentok'){
                 toastr.success("Payment Adress has been Generated!", "Great!");
                $("#pay_method").val('');
                $("#deposit_amount").val('');
                $("#hide_form").hide();
                $("#display_wallet").show();
                $("#submit_request").attr('disabled', false);
                $("#submit_request").html("Process Payment");
                $('#wallet_addr').html('<div class="input-group"><input type="text" class="form-control" value="'+payment_address+'" id="copy_addr" readonly><div class="input-group-append"><button class="btn btn-default btn-outline-secondary" id="copy_btn" data-clipboard-target="#copy_addr" type="button">Copy Address</button></div></div><br>');
                $('#qrcode').html('<img alt="Please Wait" src="https://www.okchanger.com/payment-systems/preview-file/35" style="width: 150px; height: auto;" /><br><br>');
            }
              }else if (method == 'spend_acct_bal') {
                  if(requests.message == 'ok'){
                      $("#pay_method").val('');
                    $("#deposit_amount").val('');
                    $("#submit_request").attr('disabled', false);
                    $("#submit_request").html("Process Payment");
                    alert("Success!", "Amount has been deducted from your Account balance");
                }else if(requests.message == 'nil'){
                    $("#submit_request").attr('disabled', false);
                    $("#submit_request").html("Process Payment");
                  alert("Error!", "Deposit amount requested is more than your spendable amount!");
                }
              }
  
          }
  });
  
    });
  
  $("#loan_form").submit(function(e){
      e.preventDefault();
      var amount = $("#loan_amount").val();
        $("#loan_btn").attr('disabled', true);
        $("#loan_btn").html("Submitting...");
        var data = 'loan_amount=' + amount;
        $.ajax({
          url: 'includes/kyc.php',
          method: 'post',
          data: data,
          dataType: 'text',
          success:function(requests){
             if (requests == 'not_found') {
              toastr.error("Please Update Your KYC Information!", "Failed!");
                $("#loan_btn").attr('disabled', false);
                $("#loan_btn").html("Request Loan");
             }else if (requests == 'success') {
              $("#loan_body_hide").hide();
              toastr.success("You have successfully requested for a loan. You will be communicated via your Email Address!", "Success!");
                $("#loan_wallet").append('<div id="display_payment" class="item-wrapper"><p style="text-transform: uppercase;">copy the wallet address to deposit service charge for your loan so it can be approved.</p><p style="color: green">btc address: <b>17Rqx5fkfSKz7QXBJXCNekaQvDzqgTqM4o</b></p></div>');
             }else{
              toastr.error("Something Went wrong!", "Try Again Later!");
              $("#loan_btn").attr('disabled', false);
              $("#loan_btn").html("Request Loan");
             }
          }
  });
  
    });
  
  //Withdraw Handler
    $("#withdraw_funds").submit(function(withdraw){
      withdraw.preventDefault();
      var withdrawal_amount = $("#withdrawal_amount").val();
      var withdrawal_method = $("#withdrawal_method").val();
      $("#withdraw_btn").attr("disabled",true);
      $("#withdraw_btn").html("Processing...");
        var data = "withdrawal_amount=" + withdrawal_amount + '&withdrawal_method=' + withdrawal_method;
        $.ajax({
          url: "includes/validation.php",
          method: "post",
          data: data,
          dataType: "text",
          cache: false,
          success: function(msg){
            if(msg == "success"){
                $("#withdraw_btn").attr("disabled", false);
                $("#withdraw_btn").html("Request Withdrawal");
                toastr.success("Withdrawal request is pending approval", "Success");
                $("#withdraw_funds")[0].reset();  
              }
            else if(msg == "failed"){
                $("#withdraw_btn").attr("disabled", false);
                $("#withdraw_btn").html("Request Withdrawal"); 
                toastr.error("Please try again something went wrong!", "Failed");
                $("#withdraw_funds")[0].reset();
            }
            else if(msg == "over"){
                $("#withdraw_btn").attr("disabled", false);
                $("#withdraw_btn").html("PROCESS WITHDRAW"); 
                toastr.error("You have Exceeded withdrawal amount", "Failed");
            }
            else if(msg == "btc_notavail"){
                $("#withdraw_btn").attr("disabled", false);
                $("#withdraw_btn").html("Request Withdrawal");
                toastr.error("Provide a wallet address and try again", "Failed");
                
            }else if(msg == "with_fail"){
                $("#withdraw_btn").attr("disabled", false);
                $("#withdraw_btn").html("Request Withdrawal");
                toastr.error("You can only withdraw profit at this time, Capital would be available for withdrawal once investment completes it cycle.", "Failed");
                
            }
          }
        });
    });
  
        //Update User Profile
      function populate_dashboard(){
       var pass = "balance_page=" + 'view';
      $.ajax({
        url: "includes/validation.php",
        method: 'post',
        data: pass,
        dataType: 'json',
        cache: false,
        success:function(value){
          $("#account_balance").html("$"+value.account_balance);
          $("#last_deposit").html("$"+value.last_deposit);
          $("#last_withdrawal").html("$"+value.last_withdrawal);
          $("#today_profit").html("$"+value.today_profit);
          $("#avail_with").html("$"+value.avail_with);
          $("#total_profit").html("$"+value.total_profit);
          $("#total_deposit").html("$"+value.total_deposit);
          $("#curr_deposit").html("$"+value.curr_deposit);
          $("#plan").html(value.plan);
          $("#ti_amount").html("Upd: "+value.ti_amount);
          $("#ti_amount_a").html("Upd: "+value.ti_amount);
          $("#ti_deposit").html("Upd: "+value.ti_deposit);
          $("#ti_withdraw").html("Upd: "+value.ti_withdraw);
          $("#ti_profit").html("Upd: "+value.ti_profit);
        }
  
      });
  
  }
  
  populate_dashboard();
      setInterval(function(){
        populate_dashboard();
      }, 5000); 
    
  
  //View Profile Handler
      //Update User Profile
      function populate_profile(){
      //Fetch User Profile Data
      if($("#identifier").val() === "p&$page"){
       var pass = "view_page=" + 'view';
      $.ajax({
        url: "includes/validation.php",
        method: 'post',
        data: pass,
        dataType: 'json',
        cache: false,
        success:function(view){
          $("#firstname").val(view.firstname);
          $("#lastname").val(view.lastname);
          $("#phone_number").val(view.phone_number);
          $("#email").val(view.email);
          $("#plan").val(view.package);
          $("#country").val(view.country);
          $("#wallet_address").val(view.wallet_address);
          $("#ethereum_address").val(view.ethereum_address);
          $("#ada").val(view.ada);
          $("#doge").val(view.doge);
          $("#sand").val(view.sand);
          $("#mana").val(view.mana);
          $("#usdt").val(view.usdt);
          $("#shib").val(view.shib);
          $("#tron").val(view.tron);
        }
  
      });
  }
    }
    populate_profile();
  
  // My Referral List Population
  if($("#identifier").val() === "re&$page"){
  
    var query = 'referral_request=' + 'request_now';
    $.ajax({
    url: 'includes/validation.php',
    method: 'post',
    data: query,
    dataType: 'json',
    success: function(referral_requested){
       var length = referral_requested.length;
         if(length > 0){
            var total = 0;
            for (var i=0; i<length; i++){
            var id = i+1;
              var row = $('<tr><td>'+id+'</td><td>'+referral_requested[i].fullname+'</td><td>10%</td><td>'+referral_requested[i].date_joined+'</td><td>'+referral_requested[i].bonus+' USD'+'</td></tr>');
                        $('#table_ref').append(row);
                        total = total + referral_requested[i].bonus;
                      }
                       var row = $('<tr><td>'+'</td><td>'+'</td><td>'+'</td><td>'+'</td><td style="text-align:left; color: #4cc6e0;">Total :: '+total.toFixed(2)+' USD'+'</td></tr>');
                        $('#table_ref').append(row);
                    }
                    else if(referral_requested.msg == 'failed'){
                      var row = $('<tr><td colspan="6" style="text-align:center; color: #d9534f;">No Referrals Yet</td></tr>');
                        $('#table_ref').append(row);
                    }
  
                  }
  
                });
  
                }
  
  
    //GET SPONSOR
  
    if($("#identifier").val() === "re&$page"){
  
    var query = 'sponsor_request=' + 'request_now';
    $.ajax({
    url: 'includes/validation.php',
    method: 'post',
    data: query,
    dataType: 'json',
    success: function(sponsor_requested){
       var length = sponsor_requested.length;
         if(length > 0){
            var total = 0;
            for (var i=0; i<length; i++){
            var id = i+1;
              var row = $('<tr><td>'+sponsor_requested[i].sponsor_fullname+'</td><td>'+sponsor_requested[i].sponsor_date_joined+'</td></tr>');
                        $('#sponsor_table').append(row);
                      }
                    }
                     if(sponsor_requested.sponsor_msg == 'failed'){
                      var row = $('<tr><td colspan="2" style="text-align:center; color: #d9534f;">No Referrals Yet</td></tr>');
                        $('#sponsor_table').append(row);
                    }
  
                  }
  
                });
  
                }
   
    //History Query
    $("#from_calendar").change(function(e){
      e.preventDefault();
    function getdate() {
      var tt = $("#from_calendar").val();
  
      var date = new Date(tt);
      var newdate = new Date(date);
  
      newdate.setDate(newdate.getDate() + 1);
      
      var dd = newdate.getDate();
      var mm = newdate.getMonth() + 1;
      var y = newdate.getFullYear();
      //Appending zero to date
      if(mm >= 0 && mm <= 10){
        mm = '0'+mm;
      }
      if(dd >= 0 && dd <= 10){
        dd = '0'+dd;
      }
  
      var min_to = y + '-' + mm + '-' + dd;
      //reset to-date
      $("#to_calendar").attr('disabled', false);
      $("#to_calendar").attr('min', min_to);
  }
  getdate();
  
    });
  
  $("#hist_form").submit(function(e){
    e.preventDefault();
      //Loader Set
      $("#history_btn").html("<i class='mdi mdi-spin'></i> Searching...");
      $("#history_btn").attr("disabled", true);
      //re-assign
      var identifier = $("#identifier").val();
      var page_tag;
      if(identifier == 'wh&$page'){
          page_tag = 'wh';
      }
      else if(identifier == 'th&$page'){
        page_tag = 'th';
      }
      else if(identifier == 'dh&$page'){
        page_tag = 'dh';
      }
      else if(identifier == 'bh&$page'){
        page_tag = 'bh';
      }
        
        $.ajax({
         url: "includes/tbl.php",
         method: "post",
         data: $("#hist_form").serialize()+"&page_tag=" + page_tag,
         dataType: "json",
         cache: false,
         success: function(status){
          $("#history_btn").attr("disabled", false);
          $("#history_btn").html("<i class='mdi mdi-database'></i> Search Records");
          $('#hist_tbl').html(''); 
           if (status.date != 'null') {
          var len = status.length;
            for (var i = 0; i<len; i++) {
            var id = i+1;
            if (page_tag == 'wh') {
              var row = $('<tr><td>'+id+'</td><td>'+status[i].date+'</td><td>$'+status[i].amount+'</td><td>'+status[i].btc_withdrawal_address+'</td><td>'+status[i].status+'</td></tr>');
                      $('#hist_tbl').append(row);
                    } 
                    else if (page_tag == 'dh') {
                      var row = $('<tr><td>'+id+'</td><td>'+status[i].date+'</td><td>$'+status[i].amount+'</td></tr>');
                      $('#hist_tbl').append(row);
                    }
                    else if (page_tag == 'th') {
                      var row = $('<tr><td>'+id+'</td><td>'+status[i].date+'</td><td>$'+status[i].amount+'</td><td>$'+status[i].profit+'</td><td>$'+status[i].return+'</td></tr>');
                      $('#hist_tbl').append(row);
                    }
          }
        }if (status.msg == 'failed') {
              var row = $('<tr><td colspan="5" style="text-align:center; color: #d9534f;">No Records Available</td></tr>');
                        $('#hist_tbl').append(row);
              
            }
         }
        });
  });
  
  
  var clipboard = new ClipboardJS('#copy_btn');
  
      clipboard.on('success', function(e) {
          toastr.success("Wallet address copied to clipboard", "Sucess!");
      });
  
      clipboard.on('error', function(e) {
          toastr.error("Failed to copy address", "Failed");
      });
  
  
            
  });