console.log("Barbershop");

$(document).on(
    'input',
    '#booking-grid input[name="BookingSearch[customer_name]"]',
    function () {

        const input = this;

        clearTimeout(window.bookingSearchTimeout);

        window.bookingSearchTimeout = setTimeout(function () {

            console.log('Live search:', input.value);

            $(input)
                .closest('form')
                .find('input[name="BookingSearch[customer_name]"]')
                .trigger('change');

        }, 500);

    }
);