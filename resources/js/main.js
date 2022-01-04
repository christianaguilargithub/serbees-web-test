$(document).ready(() => {
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }
    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
    document.addEventListener("DOMContentLoaded", nav);
    function nav() {
        const burger = document.querySelector(".burger");
        const nav = document.querySelector(".main-nav");
        burger.addEventListener("click", () => {
            nav.classList.toggle("show");
        });
    }

    $(function () {
        var now = new Date();
        $('[data-toggle="datepicker"]').datepicker({
            endDate: new Date(now.getFullYear() - 12, 1, 0),
        });
    });

    $("#service-id").select2({
        placeholder: "Select service(s)",
        maximumSelectionLength: 3,
        allowClear: true,
        templateResult: serviceFormatState,
    });
});
