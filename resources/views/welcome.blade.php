<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Luthfi</title>
    <!--

Template 2097 Pop

http://www.tooplate.com/view/2097-pop

-->
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/tooplate-style.css">
    <!-- Templatemo style -->

    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function() {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");
    </script>

</head>

<body>
    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
                            <h1 class="mb-4">Data Pegwai</h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
                            <p>Berikut data lengkap pegawai</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <table border="1">
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                            @foreach($pegawai as $p)
                            <tr>
                                <td>{{ $p->pegawai_nama }}</td>
                                <td>{{ $p->pegawai_jabatan }}</td>
                                <td>{{ $p->pegawai_umur }}</td>
                                <td>{{ $p->pegawai_alamat }}</td>
                                <td>
                                    <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a> |
                                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2018</span> Your Company. Layout: Tooplate</p>
            </footer>
        </div>
        <!-- .tm-main-content -->
    </div>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <!-- https://jquery.com/ -->
    <script src="slick/slick.min.js"></script>
    <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/anime.min.js"></script>
    <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>
    <script>
        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if ($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            } else {
                main.removeClass('tm-footer-relative');
            }
        }

        /* DOM is ready   ------------------------------------------------*/
        $(function() {

            setupFooter();

            $(window).resize(function() {
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear()); // Update year in copyright           
        });
    </script>

</body>

</html>