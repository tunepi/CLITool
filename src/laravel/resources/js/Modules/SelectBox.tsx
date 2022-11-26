import React from 'react';
import Option from '../Atoms/Option ';

interface Props {
    options: Array<string>;
    handleChange: React.ChangeEventHandler<HTMLSelectElement>;
    name: string;
    defaultValue: string | number | undefined;
    className: string;
}

export default function SelectBox({ options, handleChange, name, defaultValue, className }: Props) {
    const option = options.map((option, index) => <Option value={option} index={index} />);
    return (
        <div>
            <select
                className={
                    'form-select appearance-none border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full px-3 py-1.5' +
                    className
                }
                onChange={(e) => handleChange(e)}
                name={name}
                defaultValue={defaultValue}
            >
                {option}
            </select>
        </div>
    );
}
