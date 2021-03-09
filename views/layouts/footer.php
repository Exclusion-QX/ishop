<footer id="footer">
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2021</p>
            </div>
        </div>
    </div>
</footer>


<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/add/"+ id, {}, function (data) {
                $("#cart-count").html(data);
                document.getElementById("product-quantity").innerHTML --;
                let quantity = document.getElementById("product-quantity").innerHTML;
                if (quantity == 0) {
                    document.getElementById("btn-buy").style.display = 'none';
                }
            });
            return false;
        });
    });
</script>
</body>
</html>