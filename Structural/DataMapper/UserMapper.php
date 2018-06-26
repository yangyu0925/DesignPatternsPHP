<?php

// 数据映射访问层
class UserMapper
{
    protected $adapter;

    public function __construct(DBAL $dbLayer)
    {
        $this->adapter = $dbLayer;
    }

    // 保存内存中数据对象到数据库中
    public function save(User $user)
    {
        // key 必须和数据表字段对应
        $data = array(
            'userid'   => $user->getUserId(),
            'username' => $user->getUsername(),
        );

        // 如果ID不存在则新建，否则更新
        if (null === ($id = $user->getUserId())) {
            unset($data['userid']); // 主键
            $this->adapter->insert($data);

            return true;
        } else {
            $this->adapter->update($data, array('userid = ?' => $id));

            return true;
        }
    }

    // 根据ID从数据库读取User对象，并保存到内存的对象中
    public function findById($id)
    {
        $result = $this->adapter->find($id);

        if (0 == count($result)) {
            throw new Exception("User #$id not found");
        }
        $row = $result->current();

        return $this->mapObject($row);
    }

    // 返回多个User 对象
    public function findAll()
    {
        $resultSet = $this->adapter->findAll();
        $entries   = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return $entries;
    }

    // 将表的行数据映射到对象中
    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserID($row['userid']);
        $entry->setUsername($row['username']);

        return $entry;
    }
}