<!-- jQuery library -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('Admin/assets/admin/js/vendor/jquery-3.5.1.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('Admin/assets/admin/js/vendor/bootstrap.bundle.min.js')}}"></script>

<!-- date-range-picker -->
<script src="{{asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('Admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>

<!-- slimscroll js for custom scrollbar -->
<script src="{{asset('Admin/assets/admin/js/vendor/jquery.slimscroll.min.js')}}"></script>
<!-- custom select box js -->
<script src="{{asset('Admin/assets/admin/js/vendor/jquery.nice-select.min.js')}}"></script>


<!-- iziToast -->
<link rel="stylesheet" href="{{asset('Admin/assets/admin/css/iziToast.min.css')}}">
<script src="{{asset('Admin/assets/admin/js/iziToast.min.js')}}"></script>


<script>
    "use strict";

    function notify(status, message) {
        if (typeof message == 'string') {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        } else {
            $.each(message, function(i, val) {
                iziToast[status]({
                    message: val,
                    position: "topRight"
                });
            });
        }

    }

    function notifyOne(status, message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

<script src="{{asset('Admin/assets/admin/js/bootstrap-iconpicker.bundle.min.js')}}"></script>
<script src="{{('Admin/assets/admin/js/file-explore.js')}}"></script>

<script src="{{asset('Admin/assets/admin/js/nicEdit.js')}}"></script>

<!-- code preview js -->
<!-- seldct 2 js -->
<script src="{{asset('Admin/assets/admin/js/vendor/select2.min.js')}}"></script>
<!-- data-table js -->
<script src="{{asset('Admin/assets/admin/js/vendor/datatables.min.js')}}"></script>
<!-- Magnigfic js -->
<script src="{{asset('Admin/assets/admin/js/jquery.magnific-popup.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('Admin/assets/admin/js/app.js')}}"></script>


<script type="text/javascript">
    (function($) {
        "use strict";
        bkLib.onDomLoaded(function() {
            $(".nicEdit").each(function(index) {
                $(this).attr("id", "nicEditor" + index);
                new nicEditor({
                    fullPanel: true
                }).panelInstance('nicEditor' + index, {
                    hasPanel: true
                });
            });
        });
    })(jQuery);
</script>


<script src="{{asset('Admin/assets/admin/js/vendor/apexcharts.min.js')}}"></script>
<script src="{{asset('Admin/assets/admin/js/vendor/chart.js.2.8.0.js')}}"></script>
<script>
    "use strict";
    (function($) {
        $('.image-popup').magnificPopup({
            type: 'image'
        });
    })(jQuery)
    // apex-bar-chart js
    var options = {
        series: [{
            name: 'Total Sale',
            data: [518.799999999999954525264911353588104248046875, 578.16480000000001382431946694850921630859375, 1460, 3931.46999999999979991116560995578765869140625]
        }],
        chart: {
            type: 'bar',
            height: 400,
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ["January", "February", "March", "April"],
        },
        yaxis: {
            title: {
                text: "$",
                style: {
                    color: '#7c97bb'
                }
            }
        },
        grid: {
            xaxis: {
                lines: {
                    show: false
                }
            },
            yaxis: {
                lines: {
                    show: false
                }
            },
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return "$" + val + " "
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
    chart.render();

    var ctx = document.getElementById('userBrowserChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Chrome", "Handheld Browser", "Firefox"],
            datasets: [{
                data: [49, 11, 1],
                backgroundColor: [
                    '#ff7675',
                    '#6c5ce7',
                    '#ffa62b',
                    '#ffeaa7',
                    '#D980FA',
                    '#fccbcb',
                    '#45aaf2',
                    '#05dfd7',
                    '#FF00F6',
                    '#1e90ff',
                    '#2ed573',
                    '#eccc68',
                    '#ff5200',
                    '#cd84f1',
                    '#7efff5',
                    '#7158e2',
                    '#fff200',
                    '#ff9ff3',
                    '#08ffc8',
                    '#3742fa',
                    '#1089ff',
                    '#70FF61',
                    '#bf9fee',
                    '#574b90'
                ],
                borderColor: [
                    'rgba(231, 80, 90, 0.75)'
                ],
                borderWidth: 0,

            }]
        },
        options: {
            aspectRatio: 1,
            responsive: true,
            maintainAspectRatio: true,
            elements: {
                line: {
                    tension: 0 // disables bezier curves
                }
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            legend: {
                display: false,
            }
        }
    });

    var ctx = document.getElementById('userOsChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Windows 10", "Mac OS X", "Android", "Linux", "Windows 7"],
            datasets: [{
                data: [39, 4, 11, 6, 1],
                backgroundColor: [
                    '#ff7675',
                    '#6c5ce7',
                    '#ffa62b',
                    '#ffeaa7',
                    '#D980FA',
                    '#fccbcb',
                    '#45aaf2',
                    '#05dfd7',
                    '#FF00F6',
                    '#1e90ff',
                    '#2ed573',
                    '#eccc68',
                    '#ff5200',
                    '#cd84f1',
                    '#7efff5',
                    '#7158e2',
                    '#fff200',
                    '#ff9ff3',
                    '#08ffc8',
                    '#3742fa',
                    '#1089ff',
                    '#70FF61',
                    '#bf9fee',
                    '#574b90'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 0.05)'
                ],
                borderWidth: 0,

            }]
        },
        options: {
            aspectRatio: 1,
            responsive: true,
            elements: {
                line: {
                    tension: 0 // disables bezier curves
                }
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            legend: {
                display: false,
            }
        },
    });


    // Donut chart
    var ctx = document.getElementById('userCountryChart');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["India", "Bangladesh", "Brazil", "Romania", "Nigeria"],
            datasets: [{
                data: [21, 6, 3, 3, 3],
                backgroundColor: [
                    '#ff7675',
                    '#6c5ce7',
                    '#ffa62b',
                    '#ffeaa7',
                    '#D980FA',
                    '#fccbcb',
                    '#45aaf2',
                    '#05dfd7',
                    '#FF00F6',
                    '#1e90ff',
                    '#2ed573',
                    '#eccc68',
                    '#ff5200',
                    '#cd84f1',
                    '#7efff5',
                    '#7158e2',
                    '#fff200',
                    '#ff9ff3',
                    '#08ffc8',
                    '#3742fa',
                    '#1089ff',
                    '#70FF61',
                    '#bf9fee',
                    '#574b90'
                ],
                borderColor: [
                    'rgba(231, 80, 90, 0.75)'
                ],
                borderWidth: 0,

            }]
        },
        options: {
            aspectRatio: 1,
            responsive: true,
            elements: {
                line: {
                    tension: 0 // disables bezier curves
                }
            },
            scales: {
                xAxes: [{
                    display: false
                }],
                yAxes: [{
                    display: false
                }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>


<script>
    'use strict';
    (function($) {
        $(document).on('click', '.close-tree', function() {
            var val = this.value;
            if (val == 1) {
                $(this).text("Expand All")
                $(this).val(2);
                $(document).find('.folder-root.open').removeClass('open').addClass('closed');
            } else {
                $(this).text("Collapse All")
                $(this).val(1);
                $(document).find('.folder-root.closed').removeClass('closed').addClass('open');
            }
        });

        $(".file-tree").filetree().removeClass('d-none').hide().slideDown('slow');

        $(document).on('click', '.parent', function() {
            $('#image').removeAttr('required');
            var parent = $(document).find('.parent.active');
            var length = parent.length;
            var form = $('#addForm');
            var data = $(this).data('category');
            var image = $(this).data('image');
            var action = `https://script.viserlab.com/visermart/admin/product/category/create/${data.id}`
            form.attr('action', action);

            $(document).find('.delete-btn').addClass('d-none');

            $(this).siblings('.delete-btn').removeClass('d-none');

            if (length > 0) {
                parent.first().removeClass('active');
            }
            form.find('.select2-auto-tokenize').text('');
            form.find('input[name=parent_id]').val(data.parent_id);
            form.find('input[name=name]').val(data.name);
            form.find('input[name=icon]').val(data.icon);
            form.find('input[name=meta_title]').val(data.meta_title);
            form.find('textarea[name=meta_description]').val(data.meta_description);

            if (data.is_top == 1) {
                form.find('input[name=top_category]').prop('checked', true);
            } else {
                form.find('input[name=top_category]').prop('checked', false);
            }

            if (data.is_special == 1) {
                form.find('input[name=special_category]').prop('checked', true);
            } else {
                form.find('input[name=special_category]').prop('checked', false);
            }

            if (data.in_filter_menu == 1) {
                form.find('input[name=filter_menu]').prop('checked', true);
            } else {
                form.find('input[name=filter_menu]').prop('checked', false);
            }

            $.each(data.meta_keywords, function(i, item) {
                form.find('.select2-auto-tokenize').append($('<option>', {
                    value: item,
                    text: item,
                }));
            });

            form.find('.select2-auto-tokenize').val(data.meta_keywords);
            form.find('.profilePicPreview').css('background-image', `url(${image})`);

            $('.add-chlid').removeAttr('disabled');

            $(this).toggleClass('active');
        });


        $(document).on('click', '.add-chlid', function() {
            $('#image').attr('required', 'required');
            var form = $('#addForm');
            var parent = $(document).find('.parent.active');
            var parent_id = $(parent).data('category').id;
            var action = `https://script.viserlab.com/visermart/admin/product/category/create/0`
            form.attr('action', action);
            form.find("input[type=text], textarea, select").val("");
            form.find('input[name=parent_id]').val(parent_id);
            form.find('.select2-auto-tokenize').text('');

            form.find('input[name=top_category]').prop('checked', false);
            form.find('input[name=special_category]').prop('checked', false);
            form.find('input[name=filter_menu]').prop('checked', false);

            form.find('.profilePicPreview').css('background-image', `url('https://script.viserlab.com/visermart/placeholder/image/200x150')`);
        });

        $(document).on('click', '.add-parent', function() {
            $('#image').attr('required', 'required');
            $('.add-chlid').attr('disabled', 'disabled');
            var form = $('#addForm');
            var action = `https://script.viserlab.com/visermart/admin/product/category/create/0`;

            var parent = $(document).find('.parent.active');

            var length = parent.length;

            if (length > 0) {
                parent.first().removeClass('active');
                parent.parents('li').find('.delete-btn').addClass('d-none');
            }

            form.attr('action', action);
            form.find("input[type=text], textarea, select").val("");
            form.find('input[name=parent_id]').val('');
            form.find('.select2-auto-tokenize').text('');
            form.find('input[name=top_category]').prop('checked', false);
            form.find('input[name=special_category]').prop('checked', false);
            form.find('input[name=filter_menu]').prop('checked', false);
            form.find('.profilePicPreview').css('background-image', `url('https://script.viserlab.com/visermart/placeholder/image/200x150')`);
        });


        $('#addModal, #editModal').on('shown.bs.modal', function(e) {
            $(document).off('focusin.modal');
        });

        $('.iconPicker').iconpicker().on('change', function(e) {
            $(this).parent().siblings('.icon-name').val(`<i class="${e.icon}"></i>`);
        });

        $(document).on('click', '.delete-btn', function() {
            var modal = $('#deleteModal');
            var id = $(this).data('id');

            console.log(id);
            var form = document.getElementById('deletePostForm');
            modal.find('.modal-title').text('Delete Category');
            modal.find('.modal-body').text('Are you sure to delete this category?');
            form.action = 'https://script.viserlab.com/visermart/admin/product/category/delete' + '/' + id;
            modal.modal('show');
        });

        $('#addForm').on('submit', function(e) {
            e.preventDefault();
            var url = this.action;
            var formData = new FormData(this);
            var btn = $(this).find('button[type=submit]')
            btn.attr('disabled', 'disabled');
            $.ajax({
                url: url,
                type: "POST",
                cache: false,
                contentType: false, // you can also use multipart/form-data replace of false
                processData: false,
                data: formData,
                success: function(response) {
                    if (response.status == 'error') {
                        notify('error', response.message);
                    } else {
                        console.log(response.data);
                        notify('success', response.message);
                    }
                    if (response.reload == true) {
                        location.reload();
                    }
                    btn.removeAttr('disabled');
                }
            });
        });

    })(jQuery)
</script>




<!--DataTables--->
<script src="{{asset('Admin/plugins/datatables/jquery.dataTables.min.js')}}"> </script>
<script src="{{asset('Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"> </script>
<script src="{{asset('Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"> </script>
<script src="{{asset('Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"> </script>

<!---page script-->

<script>
    $(function() {
        $("#shuvo").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<!-- SweetAlert2 -->
<script src="{{asset('Admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('Admin/plugins/toastr/toastr.min.js')}}"></script>

<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });




        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });


    });
</script>

<!-- Select2 -->
<script src="{{asset('Admin/plugins/select2/js/select2.full.min.js')}}"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })



    })
</script>

<script>
    @if(Session::has('message'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options = {
      "closeButton": true,
      "progressBar": true
    }
    toastr.warning("{{ session('warning') }}");
    @endif
  </script>