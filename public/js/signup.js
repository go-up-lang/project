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

    const idDuplicateCheck = () =>{
        let user_id = document.getElementById('user-id').value;   
        // input  hidden 넣고 값 0
        // 근데 이거 확ㅇ니 후에 되면 1

        alert('ㅎ헤헤ㅔㅎ');
    }

    // input 칸 체크
    const inputCheck = (event) => {
        let user_name = document.getElementById('user-name').value;
        let user_id = document.getElementById('user-id').value;
        let user_pwd = document.getElementById('user-pwd').value;
        let user_pwd_check = document.getElementById('user-pwd-check').value;
        let user_phone = document.getElementById('user-phone').value;
        let user_phone_check = document.getElementById('user-phone-check').checked;
        
        if(!user_name){
            alert("이름을 입력하세요");
            event.preventDefault();
        }else if(!user_id){
            alert("아이디를 입력하세요");
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
    