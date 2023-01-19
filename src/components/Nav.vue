<template>
    <nav class='navbar navbar-expand-lg navbar-light bg-nav'>
        <div class='container'>
            <a class='navbar-brand text-white' href='#'>Pfyzip</a>
            <button class='btn btn-danger navbar-toggler border-3 px-2' type='button' data-bs-toggle='offcanvas'
                data-bs-target='#offcanvasExample' aria-controls='offcanvasExample'>
                <a href="https://icons8.com/icon/ccc/menu-arredondado"></a>
            </button>
            <div class='offcanvas offcanvas-start-lg bg-nav' tabindex='-1' id='offcanvasExample'
                aria-labelledby='offcanvasExampleLabel'>
                <div class='offcanvas-header d-flex d-lg-none'>
                    <h5 class='offcanvas-title text-white' id='offcanvasExampleLabel'>Pfyzip</h5>
                    <a href='javascript:void(0) ' class='text-reset p-0' data-bs-dismiss='offcanvas' aria-label='close'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#FFFFFF'
                            class='bi bi-x-circle' viewBox='0 0 16 16'>
                            <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z' />
                            <path
                                d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z' />
                        </svg>
                    </a>
                </div>
                <div class='offcanvas-body p-lg-0'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a class='nav-link active' aria-current='page' href='#'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link active' aria-current='page' href='#'>Ferramentas</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link active' aria-current='page' href='#'>Sobre</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link active' aria-current='page' href='#'>Premium</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>

export default {
    name: 'Nav'
}

</script>

<style scoped>

.bg-nav{
    background-color: rgb(255, 0, 68);
}

.navbar-brand{
    background-color: rgb(255, 0, 68);
    font-weight: 800;
    letter-spacing: -1px;
    font-size: 30px;
}

.offcanvas-body{
    background-color: rgb(255, 0, 68);
}

.container{
    background-color: transparent;
}

.nav-link{
    background-color: rgb(255, 0, 68) !important;
    margin-top: 5px;
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: 15px;
}

.nav-item{
    background-color: rgb(255, 0, 68);
}

@media (min-width : 992px) {
    .offcanvas {
        visibility: visible;
        position: relative;
        background: none;
        border: none;
        justify-content: end;
        color: red;
    }
}

@media (max-width : 992px) {
    .offcanvas {
        width: 250px !important;
    }

    .offcanvas-start-lg {
        top: 0;
        left: 0;
        border-right: 1px solid rgba(0, 0, 0, .2);
        transform: translateX(-100%);
    }
}

.navbar-nav li a {
    color: white !important;
}
</style>