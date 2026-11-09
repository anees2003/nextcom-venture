<script src="<?= asset('assets/js/jquery-ui.min.js') ?>"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('scheduleMeetingBtn').addEventListener('click', function () {
            var form = document.getElementById('zoomForm');
            var formData = new FormData(form);

            fetch('schedule-meeting.html', { // Using secure_url helper
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('responseMessage').innerHTML = '<div class="alert alert-success">' + data.message + '</div>';
                } else {
                    document.getElementById('responseMessage').innerHTML = '<div class="alert alert-danger">' + data.message + '</div>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>
<script>

    $(document).ready(function() {
        // Get the timezone offset in minutes
        var timezoneOffset = new Date().getTimezoneOffset();

        // Convert the timezone offset to hours and minutes in "Asia/Tokyo" timezone
        var offsetHours = Math.floor(Math.abs(timezoneOffset) / 60);
        var offsetMinutes = Math.abs(timezoneOffset) % 60;
        var offsetSign = timezoneOffset < 0 ? '+' : '-'; // Determine the sign of the offset

        // Format the offset in "Asia/Tokyo" timezone (e.g., +09:00)
        var formattedOffset = offsetSign + ('0' + offsetHours).slice(-2) + ':' + ('0' + offsetMinutes).slice(-2);

        // Update the input field with the formatted timezone offset
        $('#timezoneOffsetInput').val(formattedOffset);
    });

</script>
<script>
    $(function() {
        $('#datepicker').datepicker({
            dateFormat: "yy-mm-dd",

            onSelect: function(dateText) {
                $('#datepicker2').datepicker("setDate", $(this).datepicker("getDate"));
                updateTime();
            }
        });
    });

    $(function() {
        $("#datepicker2").datepicker();
        $(".widgets-time-slot").click(function(){
            $(".widgets-time-slot.active").removeClass('active');
            $(this).addClass('active');
            updateTime();
        });

    });

    function updateTime(){
        var date = getCurrentDate();
        date += ' ' + $(".widgets-time-slot.active").attr('data-time') + ':00';
        $("#final_date").val(date);
    }

    function getCurrentDate(){
        var selectedDate = $("#datepicker").datepicker("getDate");

        // Extract year, month, and day
        var year = selectedDate.getFullYear();
        var month = selectedDate.getMonth() + 1; // Adding 1 because months are zero-indexed
        var day = selectedDate.getDate();

        // Formatting month and day to have leading zeros if necessary
        var formattedMonth = (month < 10 ? '0' : '') + month;
        var formattedDay = (day < 10 ? '0' : '') + day;

        // Construct the formatted date string
        var formattedDate = year + '-' + formattedMonth + '-' + formattedDay;
        return formattedDate;
    }
</script>
<script>
    $(document).ready(function(){
        // Check if the URL contains datetime parameter
        var url = window.location.href;
        if(url.indexOf("?datetime=") != -1) {
            // Append #demoCall to the end of the URL
            var newUrl = url.replace(/#.*$/, '') + '#demoCall';

            // Redirect to the modified URL
            window.location.href = newUrl;
        }
    });

</script>
<script>
    $(document).ready(function() {
        $('.widgets-time-slot-btn').click(function() {
          $('.demo-date-time').addClass('d-none');
          $('.schedule-demo-call').removeClass('d-none');
        });
    });

    $(document).ready(function() {
        $('.schedule-back-arrow').click(function() {
          $('.schedule-demo-call').addClass('d-none');
          $('.demo-date-time').removeClass('d-none');
        });
    });
</script>
