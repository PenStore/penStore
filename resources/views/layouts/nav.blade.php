<style>
    .nav {
    margin-bottom: 0;
    }
    #dropdown-menu {
        position: absolute;
        display: none;
        border: solid red 5px;
        margin-top: 120px;
    }
    

    /* .nav>li.dropdown.open {
        position: static;
    }

    .nav>li.dropdown.open .dropdown-menu {
        width: 100%;
        text-align: center;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: colummn;
    }

    .dropdown-menu>li {
    } */
</style>
<div class="topdiv">
    <div class="alertbox">Alert</div>
    <div class="navbar">
        <div class="navbar__left">
            <a class="dropdown-toggle" id="toggleDropdown">
                <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 1H0V0H18.5V1ZM18.5 9H0V8H18.5V9ZM0 17H18.5V16H0V17Z" fill="black"/>
                </svg>
            </a>
            <div id="dropdown-menu">
                <p>asd</p>
                <p>asd</p>
                <p>asd</p>
            </div>
        </div>
        <div class="navbar__midle">
            <a href="{{route('main')}}">LOGO</a>
        </div>
        <div class="navbar__right">
            <div>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0108 13.7179C11.7372 14.8278 10.0721 15.5 8.25 15.5C4.24594 15.5 1 12.2541 1 8.25C1 4.24594 4.24594 1 8.25 1C12.2541 1 15.5 4.24594 15.5 8.25C15.5 10.0721 14.8278 11.7372 13.7179 13.0108L19.8536 19.1464L19.1464 19.8536L13.0108 13.7179ZM14.5 8.25C14.5 11.7018 11.7018 14.5 8.25 14.5C4.79822 14.5 2 11.7018 2 8.25C2 4.79822 4.79822 2 8.25 2C11.7018 2 14.5 4.79822 14.5 8.25Z" fill="black"/>
                </svg>
                <div class="basket" >
                    <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.69157 0.689941C7.4318 0.689941 6.22361 1.19039 5.33282 2.08118C4.44202 2.97198 3.94157 4.18016 3.94157 5.43994V5.99994H0.781574L0.0115738 17.5999C-0.0350324 18.2837 0.0594434 18.9698 0.289133 19.6156C0.518823 20.2613 0.878821 20.853 1.34677 21.3537C1.81472 21.8545 2.38063 22.2537 3.00936 22.5266C3.63808 22.7995 4.31619 22.9402 5.00157 22.9399H12.3816C13.0661 22.9401 13.7433 22.7996 14.3713 22.5274C14.9993 22.2551 15.5647 21.8568 16.0325 21.3571C16.5003 20.8575 16.8605 20.2671 17.0909 19.6225C17.3212 18.9779 17.4167 18.2929 17.3716 17.6099L16.6016 6.00994H13.4416V5.43994C13.4416 4.81616 13.3187 4.19849 13.08 3.6222C12.8413 3.0459 12.4914 2.52226 12.0503 2.08118C11.6093 1.64011 11.0856 1.29022 10.5093 1.05151C9.93302 0.812804 9.31535 0.689941 8.69157 0.689941ZM12.4416 5.43994V5.99994H4.94157V5.43994C4.94157 4.44538 5.33666 3.49155 6.03992 2.78829C6.74318 2.08503 7.69701 1.68994 8.69157 1.68994C9.68614 1.68994 10.64 2.08503 11.3432 2.78829C12.0465 3.49155 12.4416 4.44538 12.4416 5.43994ZM12.4416 6.99994H4.94157V7.55994C4.94157 8.5545 5.33666 9.50833 6.03992 10.2116C6.74318 10.9149 7.69701 11.3099 8.69157 11.3099C9.68614 11.3099 10.64 10.9149 11.3432 10.2116C12.0465 9.50833 12.4416 8.5545 12.4416 7.55994V6.99994ZM3.94157 7.55994V6.99994H1.72157L1.00157 17.6699C0.964529 18.2175 1.04055 18.7668 1.22492 19.2837C1.40928 19.8006 1.69804 20.2741 2.07324 20.6746C2.44843 21.0751 2.90202 21.3941 3.40581 21.6118C3.90959 21.8295 4.45277 21.9412 5.00157 21.9399H12.3816C12.9295 21.9398 13.4716 21.8271 13.9742 21.6088C14.4768 21.3905 14.9292 21.0713 15.3033 20.6709C15.6774 20.2706 15.9653 19.7976 16.1491 19.2814C16.3328 18.7651 16.4086 18.2167 16.3716 17.6699L15.6616 6.99994H13.4416V7.55994C13.4416 8.81972 12.9411 10.0279 12.0503 10.9187C11.1595 11.8095 9.95135 12.3099 8.69157 12.3099C7.4318 12.3099 6.22361 11.8095 5.33282 10.9187C4.44202 10.0279 3.94157 8.81972 3.94157 7.55994Z" fill="black"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("toggleDropdown").addEventListener("click", toggleDropdown);

    function toggleDropdown() {
        console.log("asd")
        let toggleDropdown = document.getElementById("dropdown-menu")
        if (toggleDropdown.style.display === "block") {
            toggleDropdown.style.display = "none"
        } else {
            toggleDropdown.style.display = "block"
        }
        
    }
</script>