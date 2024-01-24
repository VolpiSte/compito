<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php echo '<p>Hello World</p>'; ?>

    <form>
        <p>Ricerca <input type="text" id="valore" name="name" /></p>
        <p><input type="submit" id="button"/></p>
    </form>

    <div id="tabella">
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            console.log("DOM fully loaded and parsed");
            var button = document.getElementById("button");
            button.addEventListener("click", sulClick);
        });

        function sulClick(e) {
            e.preventDefault();
            var contenuto = document.getElementById("valore").value;

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'api.php');
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('k=' + contenuto);

            xhr.onload = function() {
                if (xhr.status != 200) {
                    alert(`Error ${xhr.status}: ${xhr.statusText}`);
                } else {
                    var k = document.getElementById("tabella");
                    k.innerHTML = xhr.response;

                    var deleteButtons = document.querySelectorAll('.delete-btn');
                    deleteButtons.forEach(function(button) {
                        button.addEventListener('click', onDeleteClick);
                    });
                }
            };

            return false;
        }

        function onDeleteClick(e) {
            e.preventDefault();
            var userId = e.target.dataset.id;

            let deleteXhr = new XMLHttpRequest();
            deleteXhr.open('POST', 'delete.php');
            deleteXhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            deleteXhr.send('id=' + userId);

            deleteXhr.onload = function() {
                if (deleteXhr.status != 200) {
                    alert(`Error ${deleteXhr.status}: ${deleteXhr.statusText}`);
                } else {
                    // Remove the user's div from the DOM
                    e.target.parentNode.remove();
                }
            };
        }
    </script>

</body>

</html>
