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
                .trigger('submit');

        }, 100);

    }
);