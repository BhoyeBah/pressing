$(document).ready(function () {

    //Gestion de la datatable
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $('.searchselect').select2();
    var i = 1;
    // Fonction pour empêcher les doublons d'articles sélectionnés
    function updateArticleOptions() {
        let selectedValues = [];

        $('.articles_id').each(function () {
            const val = $(this).val();
            if (val !== "") {
                selectedValues.push(val);
            }
        });

        $('.articles_id').each(function () {
            const currentSelect = $(this);
            const currentValue = currentSelect.val();

            currentSelect.find('option').each(function () {
                const option = $(this);
                const optionValue = option.val();

                if (optionValue === "") {
                    option.prop('disabled', false);
                } else if (optionValue !== currentValue && selectedValues.includes(optionValue)) {
                    option.prop('disabled', true);
                } else {
                    option.prop('disabled', false);
                }
            });
        });
    }
    $('#addBtn').click(function () {
        var articles = $('.articles_id').html();
        i++;
        $('#dynamicadd').append('<tr id="row' + i + '"><td>\n' +
            '    <select name="articles_id[]" class="form-select searchselect articles_id" id="articles_id[]' + i + '">\n' +
            '        ' + articles + '</select>\n' +
            '    </td><td><input type="number" class="form-control text-end price" name="price[]" readonly></td>\n' +
            '    <td><input type="number" class="form-control text-end quantity" name="quantity[]"></td>\n' +
            '    <td><input type="number" class="form-control text-end remise" name="remise[]"></td>\n' +
            '    <td><input type="number" class="form-control text-end total_amount" name="total_amount[]" readonly></td>\n' +
            '    <td class="text-center"><button type="button" id="' + i + '" class="btn btn-sm btn-danger delete"><i class=\'bx bxs-x-square\'></i></button></td></tr>'
        );

        $('.articles_id').select2();
        updateArticleOptions();
    });

    $(document).on('keyup change', '.price, .quantity, .remise, .montantRecu, .total_amount', function () {
        var value = parseFloat($(this).val());
        if (value < 0 || isNaN(value)) {
            $(this).val(0); // Remplace les valeurs négatives ou non numériques par 0
        }
    });

    $(document).on('click', '.delete', function () {
        if ($('#dynamicadd tr').length > 1) {
            $(this).closest('tr').remove();
        } else {
            alert("Vous ne pouvez pas supprimer la dernière ligne.");
        }
        totalAmount(); // Recalculer après suppression
        updateArticleOptions();
    });

    function totalAmount() {
        var total = 0;
        var totalRemise = 0;
        var totalAvecRemise = 0;

        var montantRecu = parseFloat($('.montantRecu').val()) || 0;

        $('.total_amount').each(function () {
            var amount = parseFloat($(this).val()) || 0;
            total += amount;

            var amountRemise = parseFloat($(this).data('amountRemise')) || 0;
            totalAvecRemise += amountRemise;

            var remise = parseFloat($(this).data('remise')) || 0;
            totalRemise += remise;
        });

        var resteAPayer = totalAvecRemise - totalRemise - montantRecu;

        $('.montantRecu').html(montantRecu.toFixed(2));
        $('.total').html(total.toFixed(2));
        $('.totalRemise').html(totalRemise.toFixed(2));
        $('.totalAvecRemise').html(totalAvecRemise.toFixed(2));
        $('.resteAPayer').html(resteAPayer.toFixed(2));  // Affiche le reste à payer
    }

    $('#dynamicadd').delegate('.articles_id', 'change', function () {
        var tr = $(this).parent().parent();
        var price = parseFloat(tr.find('.articles_id option:selected').attr('data-price')) || 0;
        tr.find('.price').val(price);
        var qty = parseFloat(tr.find('.quantity').val()) || 0;
        var remise = parseFloat(tr.find('.remise').val()) || 0;

        var amountRemise = qty * price;
        var total_amount = amountRemise - remise;

        tr.find('.total_amount').val(total_amount.toFixed(2));
        tr.find('.total_amount').data('amountRemise', amountRemise);  // Store amountRemise
        tr.find('.total_amount').data('remise', remise);
        updateArticleOptions();
        totalAmount();
    });

    $('#dynamicadd').delegate('.quantity, .remise', 'keyup', function () {
        var tr = $(this).parent().parent();
        var price = parseFloat(tr.find('.price').val()) || 0;
        var qty = parseFloat(tr.find('.quantity').val()) || 0;
        var remise = parseFloat(tr.find('.remise').val()) || 0;

        var amountRemise = qty * price;
        var total_amount = amountRemise - remise;

        tr.find('.total_amount').val(total_amount.toFixed(2));
        tr.find('.total_amount').data('amountRemise', amountRemise);  // Update amountRemise
        tr.find('.total_amount').data('remise', remise);

        totalAmount();
    });

    $(document).on('keyup change', '.montantRecu', function () {
        totalAmount();
    });

});
