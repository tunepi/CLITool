import React from 'react';
import Modal from 'react-modal';

interface Props {
    isOpen: boolean;
    onRequestClose: (id?: string) => void;
    children: JSX.Element;
    id?: number;
}

const customStyles = {
    overlay: {
        top: 0,
        left: 0,
        backgroundColor: 'rgba(102,96,96,0.7)',
        transition: 'opacity 200ms ease-in-out',
    },
    content: {
        top: '45%',
        left: '50%',
        right: 'auto',
        bottom: 'auto',
        marginRight: '-50%',
        transform: 'translate(-50%, -50%)',
        minWidth: '40%',
        maxWidth: '450px',
    },
};

const CommonModal = ({ isOpen, onRequestClose, children, id }: Props) => {
    const onCloseModal = (id?: number) => {
        id == undefined ? onRequestClose() : onRequestClose(id.toString());
    };

    return (
        <Modal
            isOpen={isOpen}
            style={customStyles}
            appElement={document.getElementById('app')}
            onRequestClose={() => {
                onCloseModal(id);
            }}
            closeTimeoutMS={200}
        >
            {children}
        </Modal>
    );
};

export default CommonModal;
