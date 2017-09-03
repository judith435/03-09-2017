// Handlers
$('button').click(function() {
    let op = $(this).val().toUpperCase();
    getFromApi(op);
});

// function constructor for leads
function lead(id, lead_name, lead_phone, product_id) {
    this.id = id;
    this.lead_name = lead_name;
    this.lead_phone = lead_phone;
    this.product_id = product_id;
}

function getFromApi(op) {

    // Prepare params
    let id = $("#id").val();
    let name = $("#name").val();
    let phone = $("#phone").val();
    let product_id = $("#select_id option:selected").val();
    let Lead_id = $("#select_id option:selected").val();
    let type = op;

    const param =
        "../../server/API.php?" +
        "q=" + type +
        "&name=" + name +
        "&id=" + id +
        "&phone=" + phone +
        "&product_id=" + product_id +
        "&Lead_id=" + Lead_id;
    
    switch (op) {
        case 'select':
            sendAJAX('select');
            break;
        case 'create': 
            sendAJAX('create', param);
            break;
    }

}