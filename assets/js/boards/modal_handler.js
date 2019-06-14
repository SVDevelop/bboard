    
    function callMainModal(type, modal_type, ...restArgs )
    {
        switch (type) {
            case 'board':
                boardModalHandler(modal_type, ...restArgs);
            break;

            case 'order':
                orderModalHandler(modal_type, ...restArgs);
            break;

            case 'product':
                productModalHandler(modal_type, ...restArgs);
            break;
          
            default:
                alert( 'modal call error' );
        }
    }

    