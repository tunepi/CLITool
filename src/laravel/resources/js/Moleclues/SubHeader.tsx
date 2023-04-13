import React, { useState } from 'react';
import { Button } from '@mui/material';

interface Props {
    headerName: string;
    buttonName?: string;
    setModalIsOpen: React.Dispatch<React.SetStateAction<boolean>>;
    general?: boolean;
    children?: React.ReactNode;
}

const SubHeader = ({ headerName, buttonName, setModalIsOpen, general, children }: Props) => {
    const checkRoll = general == undefined ? false : general;
    return (
        <div className="flex justify-between">
            <h2 className="font-semibold text-xl text-gray-800 leading-tight flex items-center">{headerName}</h2>
            <div className="flex">
                {children}
                {checkRoll == false && (
                    <div className="ml-5">
                        <Button
                            variant="contained"
                            color="primary"
                            children={buttonName}
                            onClick={() => {
                                setModalIsOpen(true);
                            }}
                        />
                    </div>
                )}
            </div>
        </div>
    );
};

export default SubHeader;
