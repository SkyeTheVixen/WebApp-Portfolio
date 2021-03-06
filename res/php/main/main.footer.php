    <div class="row mb-5"></div>
    <div class="row mb-5"></div>

    <footer class="py-3 mt-3 bg-dark" style="bottom: 0;">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item">
                <a href="<?=$pageRedirect;?>index" <?= $currentPage=="index" ? "class=\"nav-link link-light active\" aria-current=\"page\"" : "class=\"nav-link link-light\"";?>>Home</a>
            </li>
            <li class="nav-item">
                <a href="<?=$pageRedirect;?>courses" <?= $currentPage=="courses" ? "class=\"nav-link link-light active\" aria-current=\"page\"" : "class=\"nav-link link-light\"";?>> Courses</a>
            </li>
            <li class="nav-item">
                <a href="<?=$pageRedirect;?>account" <?=$currentPage=="account" ? "class=\"nav-link link-light active\" aria-current=\"page\"" : "class=\"nav-link link-light\"";?>>My Account</a>
            </li>
            <li class="nav-item right" id="logoutBtn">
                <a href="<?=$pathHead;?>php/logout" class="nav-link link-light">Logout</a>
            </li>
        </ul>
        <p class="text-center text-muted pb-3">© 2021 - <?= date("Y");?> Vixendev</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/93e867abff.js" crossorigin="anonymous" ></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" ></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js"></script>
    <script type="text/javascript" src="<?=$pathHead?>js/<?=$currentPage;?>.js" ></script>

</body>
</html>