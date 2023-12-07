let isBalanceHidden = false;

function toggleBalance() {
    const balance = document.getElementById("balance");
    const balanceInfo = document.getElementById("balance-info");
    isBalanceHidden = !isBalanceHidden;

    if (isBalanceHidden) {
        balance.style.display = "none";
        document.querySelector(".balance-toggle").innerText = "Mostrar Saldo";
            
    } else {
        balance.style.display = "block";
        document.querySelector(".balance-toggle").innerText = "Ocultar Saldo";
    }
}