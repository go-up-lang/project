    // 생년월일 
    const currentYear = new Date().getFullYear();
    const yearSelect = document.getElementById('year');
    for (let year = currentYear; year >= 1900; year--) {
        let option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }
    const monthSelect = document.getElementById('month');
    for (let month = 1; month <= 12; month++) {
        let option = document.createElement('option');
        option.value = month;
        option.textContent = month;
        monthSelect.appendChild(option);
    }
    const daySelect = document.getElementById('day');
    for (let day = 1; day <= 31; day++) {
        let option = document.createElement('option');
        option.value = day;
        option.textContent = day;
        daySelect.appendChild(option);
    }

    // 아이디 변경 시 value 1값 리셋
    const resetCheckUserId = () => {
        document.getElementById('check-user-id').value = 0;
    };
    
    // 아이디 중복체크 버튼
    const checkUserId = () => {
        let userId = document.getElementById('user-id').value;
        let checkUserId = document.getElementById('check-user-id');

        axios.post('/check-user-id', {
            user_id: userId,          // 서버로 보낼 데이터
            _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        })
        .then(response => {
            if (response.data.exists) {
                console.log(response.data.exists);
                checkUserId.value = 0;
                document.getElementById('exist').textContent = '이미 사용 중인 아이디입니다.';
            } else {
                console.log(response.data.exists);
                checkUserId.value = 1;
                document.getElementById('exist').textContent = '사용 가능한 아이디입니다.';
            }
        })
        .catch(error => {
            console.error('에러 발생:', error);
            document.getElementById('exist').textContent = '서버 오류가 발생했습니다.';
        });
    };

    // input 칸 체크
    const inputCheck = (event) => {
        let user_name = document.getElementById('user-name').value;
        let user_id = document.getElementById('user-id').value;
        let user_pwd = document.getElementById('user-pwd').value;
        let user_pwd_check = document.getElementById('user-pwd-check').value;
        let user_phone = document.getElementById('user-phone').value;
        let user_phone_check = document.getElementById('user-phone-check').checked;
        let checkUserId = document.getElementById('check-user-id').value;
        
        if(!user_name){
            alert("이름을 입력하세요");
            event.preventDefault();
        }else if(!user_id){
            alert("아이디를 입력하세요");
            event.preventDefault();
        }else if(checkUserId == 0){
            alert("아이디 중복검사를 해주십시오.");
            document.getElementById('exist').textContent = '이미 사용 중인 아이디입니다.';
            event.preventDefault();
        }else if(!user_pwd){
            alert("패스워드를 입력하세요");
            event.preventDefault();
        }else if(!(user_pwd === user_pwd_check)){
                alert("비밀번호와 비밀번호 확인이 일치하지 않습니다.");
                event.preventDefault();
        }else if(!user_phone){
            alert("연락처를 입력하세요");
            event.preventDefault();
        }else if(!user_phone_check){
            const result = confirm("연락처 미동의시 문자서비스가 제공되지 않습니다.");
            if(!result){
                event.preventDefault();
            }
        }

        
    }
    