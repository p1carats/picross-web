<?php require 'includes /header.php'; ?>
<main>
    <h1>Jouer à Anisen Crossing</h1>
    <table>
        <tr>
        <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
        <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
        <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
        <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
        <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td  class="dot"></td>
        </tr>
        <tr>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
        <tr>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
            <td class="dot"></td>
        </tr>
    </table>
</div>

<script>
  const buttons = document.querySelectorAll('td');

for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', CarreNoir);
}

function CarreNoir(){
    if (this.style.backgroundColor !== "black" && this.style.backgroundColor !== "green" ) {
   this.style.backgroundColor = "black"; 
    }
    else if (this.style.backgroundColor !== "#ccc" && this.style.backgroundColor !== "green") {
        this.style.backgroundColor = "green";
    }
    else {
        this.style.backgroundColor = "#ccc";
    }
}
</script>
</main>
<?php require 'includes /footer.php'; ?>