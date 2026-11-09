<script>

        $(document).ready(function(){

            $('#save_comments').submit(function (e) {
                e.preventDefault();
                formInstance = $(this);
                var prevBtnText = formInstance.find('.form_submit_button').html();
                formInstance.find('.form_submit_button').prop('disabled',true).html('Loading...');

                var data = formInstance.serialize();

                var url = formInstance.attr('action');

                $.ajax({
                    type: 'post',
                    url: url,
                    data: data,
                    success: function(data){
                        formInstance.trigger('reset');
                        formInstance.find('.form_submit_button').prop('disabled',false)
                        formInstance.find('.form_submit_button').html(prevBtnText);
                        formInstance.find('.form_message_container').html ("<div class='alert alert-success alert-dismissable'>Your message has been sent successfully. It will be published shortly after review.</div>");
                        formInstance.find('.form_error_container').html('');
                        // setTimeout(function(){window.location = redirectionUrl;},2000);

                        setTimeout(function(){
                                window.location.reload(1);
                            }, 2000);
                    },
                    error: function(msg){
                        formInstance.find('.form_error_container').html('');
        				var err = JSON.parse(msg.responseText);
        				$.each(err.errors, function(key, val){
        				    if(typeof(val[0]) !== 'undefined' && val[0] != val[0].replace('Entered_','') ){
        				        var str_arr = val[0].split("Entered_");
        				        formInstance.find('.form_error_container').append("<div>"+str_arr[0]+"</div>");
                                formInstance.find('.form_captcha').html(str_arr[1]);
        				    }
                            else
                            {
        						formInstance.find('.form_error_container').append("<div>"+val+"</div>");
        				    }
        				});

                        formInstance.find('.form_error_container').removeClass();
        				formInstance.find('.form_error_container').addClass('alert alert-danger');
                        formInstance.find('.form_submit_button').prop('disabled',false).html(prevBtnText);

                        setTimeout(function(){
                                window.location.reload(1);
                            }, 2000);
                    }
                });

               return false;
            });

        });

    </script>
