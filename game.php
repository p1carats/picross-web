<?php require 'includes /header.php'; ?>
<main>
    <h1>Jouer à Anisen Crossing</h1>
    <table>
        <tr>
        <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
        <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
        <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
        <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
        <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
        <tr>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
            <td   class="dot"></td>
        </tr>
    </table>
</div>

<script>
  const buttons = document.querySelectorAll('dot');

for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', CarreNoir);
}

function CarreNoir(){
   document.dot.style.backgroundColor = black; 
}
</script>
</main>
<?php require 'includes /footer.php'; ?>