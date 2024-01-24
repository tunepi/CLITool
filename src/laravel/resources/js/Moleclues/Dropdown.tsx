import React, { useState, useContext } from 'react';
import { Link } from '@inertiajs/inertia-react';
import { Transition } from '@headlessui/react';
import { Button } from '@mui/material';

interface ContextType {
    open: boolean;
    setOpen: React.Dispatch<React.SetStateAction<boolean>>;
    toggleOpen: React.MouseEventHandler<HTMLDivElement>;
}

interface Children {
    children: React.ReactNode;
}

type ContentProps = {
    align?: string;
    width?: string;
    contentClasses?: string;
    children: React.ReactNode;
};

type DropdownLinkProps = {
    href: string;
    method?: string;
    as?: string;
    children: React.ReactNode;
};

interface DropdownModalButtonProps {
    children: React.ReactNode;
    handleClick: () => void;
}

const DropDownContext = React.createContext<ContextType>({} as ContextType);

const Dropdown = ({ children }: Children) => {
    const [open, setOpen] = useState(false);

    const toggleOpen = () => {
        setOpen((previousState) => !previousState);
    };

    return (
        <DropDownContext.Provider value={{ open, setOpen, toggleOpen }}>
            <div className="relative">{children}</div>
        </DropDownContext.Provider>
    );
};

const Trigger = ({ children }: Children) => {
    const { open, setOpen, toggleOpen } = useContext(DropDownContext);

    return (
        <>
            <div onClick={toggleOpen}>{children}</div>
            {/* z-40の削除 理由:logoutが効かないため */}
            {open && <div className="fixed inset-0" onClick={() => setOpen(false)}></div>}
        </>
    );
};

const Content = ({ align = 'right', width = '40', contentClasses = 'py-1 bg-white', children }: ContentProps) => {
    const { open, setOpen } = useContext(DropDownContext);

    let alignmentClasses = 'origin-top';

    if (align === 'left') {
        alignmentClasses = 'origin-top-left left-0';
    } else if (align === 'right') {
        alignmentClasses = 'origin-top-right right-0';
    }

    let widthClasses = '';

    if (width === '40') {
        widthClasses = 'w-40';
    }

    return (
        <>
            <Transition
                show={open}
                enter=""
                enterFrom="scale-95"
                enterTo=""
                leave="transition ease-in duration-75"
                leaveFrom="transform opacity-100 scale-100"
                leaveTo="transform opacity-0 scale-95"
            >
                {open && (
                    <div
                        className={`absolute z-50 mt-2 rounded-md shadow-lg ${alignmentClasses} ${widthClasses}`}
                        onClick={() => setOpen(false)}
                    >
                        <div className={`rounded-md ring-1 ring-black ring-opacity-5 ` + contentClasses}>
                            {children}
                        </div>
                    </div>
                )}
            </Transition>
        </>
    );
};

const DropdownLink = ({ href, method = 'post', as = 'a', children }: DropdownLinkProps) => {
    return (
        <Link
            href={href}
            method={method}
            as={as}
            className="block w-full px-4 py-2 text-center text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
        >
            {children}
        </Link>
    );
};

const DropdownModalButton = ({ children, handleClick }: DropdownModalButtonProps) => {
    return (
        <Button
            className="block w-full text-left text-sm leading-5 text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
            onClick={() => {
                handleClick();
            }}
            color={'inherit'}
        >
            {children}
        </Button>
    );
};

Dropdown.Trigger = Trigger;
Dropdown.Content = Content;
Dropdown.Link = DropdownLink;
Dropdown.ModalButton = DropdownModalButton;

export default Dropdown;
