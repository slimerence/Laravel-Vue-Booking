<template>
    <app-layout title="客户档案">
        <div class="customer-container p-2">

            <el-table :data="customers" stripe style="width: 100%">
                <el-table-column fixed prop="id" label="id" width="50"/>
                <el-table-column prop="name" label="姓名" width="180"/>
                <el-table-column prop="sex" label="性别" width="70">
                    <template #default="scope">
                        <el-tag v-if="scope.row.sex == '男'">{{scope.row.sex}}</el-tag>
                        <el-tag type="danger" v-else>{{scope.row.sex}}</el-tag>
                    </template>
                </el-table-column>
                <el-table-column prop="age_range" label="年龄段"/>
                <el-table-column prop="phone" label="联系电话" width="150"/>
                <el-table-column prop="wechat" label="微信"/>
                <el-table-column prop="is_member" label="是否会员">
                    <template #default="scope">
                        <el-tag v-if="scope.row.is_member">是</el-tag>
                        <el-tag type="danger" v-else>否</el-tag>
                    </template>
                </el-table-column>
                <el-table-column prop="address" label="住址"/>
                <el-table-column prop="contact" label="对接人"/>
                <el-table-column prop="favourite" label="喜好"/>
                <el-table-column prop="hate" label="忌口"/>
                <el-table-column prop="industry" label="行业"/>
                <el-table-column fixed="right" label="操作" width="200">
                    <template #default>
                        <el-button :icon="Search" circle></el-button>
                        <el-button type="primary" :icon="Edit" circle></el-button>
                        <el-button type="danger" :icon="Delete" circle></el-button>
                    </template>
                </el-table-column>

            </el-table>

        </div>
    </app-layout>
</template>
<script setup>
import { Search, Edit, Delete } from '@element-plus/icons'
</script>
<script>
import {defineComponent,reactive} from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'

export default defineComponent({
    name: "Customer",
    props: ['customers'],
    components: {
        AppLayout
    },
    setup(){
        const form = reactive({
            id: null,
            name:null,
            sex:null,
            age_range:null,
            phone:null,
            wechat:null,
            is_member:false,
            address:null,
            contact:null,
            favourite:null,
            hate:null,
            industry:null
        })

        function handleClick() {
            console.log('click')
        }


    },
    created() {
        this.initProps()
    },
    methods:{
        initProps(){
            console.log(this.customers)
        }
    }
})
</script>

<style scoped>

</style>
