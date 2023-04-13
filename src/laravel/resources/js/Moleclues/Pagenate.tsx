import NavLink from '@/Atoms/NavLink';
import React from 'react';

interface Props {
    next_url?: string;
    prev_url?: string;
    children?: any;
}

const Pagenate = ({ next_url, prev_url, children }: Props) => {
    const nextActive = next_url == null ? false : true;
    const prevActive = prev_url == null ? false : true;
    return (
        <div className="max-w-7xl ml-auto sm:px-6 lg:px-8 bottom-5 left-1/2 w-48">
            <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {children}
                <div className="p-6 bg-white border-b border-gray-200 sm:flex space-x-8 place-items-center">
                    {
                        <>
                            {prevActive == true ? (
                                <NavLink href={prev_url} active={prevActive} children={'<<'} />
                            ) : (
                                <span className="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    {'<<'}
                                </span>
                            )}
                            {nextActive == true ? (
                                <NavLink href={next_url} active={nextActive} children={'>>'} />
                            ) : (
                                <span className="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    {'>>'}
                                </span>
                            )}
                        </>
                    }
                </div>
            </div>
        </div>
    );
};

export default Pagenate;
