import React from 'react';
import { useState } from 'react';
import { Button } from '@mui/material';
import Modal from 'react-modal';
import DetailUserModal from './DetailUserModal';
import PaginationList from './PaginationList';
import { User, Links } from '@/type';
import MainTableLayout from '@/Moleclues/MainTableLayout';
import CheckRoll from '@/Atoms/CheckRoll';
import Pagenate from '@/Moleclues/Pagenate';

interface Props {
    users: User[];
    current_page: number;
    next_url?: string;
    prev_url?: string;
}

const UserLists = ({ users, current_page, next_url, prev_url }: Props): JSX.Element => {
    //詳細モーダル表示非表示用
    const [modalIsOpen, setModalIsOpen] = useState<number>();
    //useEffectフラグ用
    const [flg, setFlg] = useState<number>(0);
    //詳細モーダル表示用
    const setModalOpenById = (id: number, setModalIsOpen: React.Dispatch<React.SetStateAction<number | undefined>>) => {
        if (setModalIsOpen == undefined) {
            return;
        }
        setModalIsOpen(id);
    };

    //useEffect起動用フラグ
    const setOpenFlg = (flg: number, setFlg: React.Dispatch<React.SetStateAction<number>>) => {
        flg === 0 ? setFlg(1) : setFlg(0);
    };

    //渡ってきた値を変数に格納
    const userData = users.map((user: User) => {
        const data = {
            ID: user.id,
            ユーザ名: user.name,
            Eメール: user.email,
            権限: CheckRoll(user.roll),
            操作: (
                <Button
                    variant="contained"
                    color="primary"
                    onClick={() => {
                        setModalOpenById(user.id, setModalIsOpen);
                        setOpenFlg(flg, setFlg);
                    }}
                >
                    詳細
                </Button>
            ),
            モーダル: (
                <DetailUserModal
                    user={user}
                    detailModalIsOpen={modalIsOpen}
                    flg={flg}
                    setOpenFlg={setOpenFlg}
                    setModalOpenById={setModalOpenById}
                    current_page={current_page}
                />
            ),
            更新日: user.updated_at,
            登録日: user.created_at,
        };
        return data;
    });

    //テーブルヘッダー兼key
    const target = ['ID', 'ユーザ名', 'Eメール', '権限', '更新日', '登録日', '操作'];

    return (
        <div className="hidden  sm:-my-px sm:ml-10 sm:block">
            <MainTableLayout
                th={target}
                tds={userData}
                children={<Pagenate next_url={next_url} prev_url={prev_url} />}
            />
        </div>
    );
};

export default UserLists;
