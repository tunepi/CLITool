//ロールの表示制御
const CheckRoll = (roll: string): string => {
    return roll == '1' ? '管理者' : '一般';
};

export default CheckRoll;
