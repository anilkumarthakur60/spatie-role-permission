<div class="social-btn-sp mx-auto">
    {!! Share::currentPage()->facebook()->twitter()->linkedin()->whatsapp()->telegram() !!}
</div>


<style>
    .social-btn-sp #social-links {
        margin: 0 auto;
        /* max-width: 500px; */
    }

    .social-btn-sp #social-links ul li {
        display: inline-block;
    }


    .fab {
        padding: 9px;
        font-size: 30px;
        width: 120px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
    }

    .fab:hover {
        opacity: 0.7;
    }

    .fa-facebook-square {
        background: #3B5998;
        color: white;
    }

    .fa-twitter {
        background: #55ACEE;
        color: white;
    }


    .fa-linkedin {
        background: #007bb5;
        color: white;
    }

    .fab-instagram {
        background: #125688;
        color: white;
    }


    .fa-whatsapp {

        background: #39dd56;
        color: white;
    }

    .fa-telegram {
        background: #3490ee;
        color: white;
    }

</style>


<script src="{{ asset('js/share.js') }}"></script>
