//select box
document.querySelectorAll('.select_box').forEach(selectBox => {
    const selectBtn = selectBox.querySelector('.select_btn');
    const selectedVal = selectBox.querySelector('.selected_val');
    const arrow = selectBox.querySelector('.arrow');
    const optionList = selectBox.querySelector('.option_list');
    const options = selectBox.querySelectorAll('.option');

    // 드롭다운 토글
    selectBtn.addEventListener('click', () => {
        selectBox.classList.toggle('active');
    });

    // 옵션 선택 시 변경
    options.forEach(option => {
        option.addEventListener('click', () => {
            selectedVal.textContent = option.textContent;
            options.forEach(opt => opt.classList.remove('selected'));
            option.classList.add('selected');
            optionList.classList.remove('active');
        });
    });

    // 외부 클릭 시 닫기
    document.addEventListener('click', (e) => {
        if (!selectBox.contains(e.target)) {
            optionList.classList.remove('active');
        }
    });
});