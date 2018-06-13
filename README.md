p_id
p_name
p_status
p_image
p_cat

if(p_cat=1)
{
select p_name, p_image where p_cat=1


update p.status_active= 1, u.status_active= 1, u.m_id = p.p_id

1>display players as per cat
2>display player photo
3>main update logic