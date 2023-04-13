import React from 'react';

interface Props {
    type?: 'submit' | 'button' | 'reset' | undefined;
    className?: string;
    processing: boolean;
    children: React.ReactNode;
    click?: any;
}

export default function Button({ type = 'submit', className = '', processing, children, click }: Props) {
    return (
        <button
            type={type}
            className={
                `inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest transition ease-in-out duration-150 ${
                    processing && 'opacity-25'
                } ` + className
            }
            disabled={processing}
            onClick={click}
        >
            {children}
        </button>
    );
}
